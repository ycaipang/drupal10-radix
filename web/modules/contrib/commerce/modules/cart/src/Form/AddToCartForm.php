<?php

namespace Drupal\commerce_cart\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Entity\Display\EntityFormDisplayInterface;
use Drupal\Core\Entity\Entity\EntityFormDisplay;
use Drupal\Core\Form\FormStateInterface;
use Drupal\commerce\Context;
use Drupal\commerce_order\Entity\OrderItemInterface;
use Drupal\commerce_store\SelectStoreTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides the order item add to cart form.
 */
class AddToCartForm extends ContentEntityForm implements AddToCartFormInterface {

  use SelectStoreTrait;

  /**
   * The cart manager.
   *
   * @var \Drupal\commerce_cart\CartManagerInterface
   */
  protected $cartManager;

  /**
   * The cart provider.
   *
   * @var \Drupal\commerce_cart\CartProviderInterface
   */
  protected $cartProvider;

  /**
   * The order type resolver.
   *
   * @var \Drupal\commerce_order\Resolver\OrderTypeResolverInterface
   */
  protected $orderTypeResolver;

  /**
   * The current store.
   *
   * @var \Drupal\commerce_store\CurrentStoreInterface
   */
  protected $currentStore;

  /**
   * The chain base price resolver.
   *
   * @var \Drupal\commerce_price\Resolver\ChainPriceResolverInterface
   */
  protected $chainPriceResolver;

  /**
   * The current user.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $currentUser;

  /**
   * The form ID.
   *
   * @var string
   */
  protected $formId;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    $instance = parent::create($container);
    $instance->cartManager = $container->get('commerce_cart.cart_manager');
    $instance->cartProvider = $container->get('commerce_cart.cart_provider');
    $instance->orderTypeResolver = $container->get('commerce_order.chain_order_type_resolver');
    $instance->currentStore = $container->get('commerce_store.current_store');
    $instance->chainPriceResolver = $container->get('commerce_price.chain_price_resolver');
    $instance->currentUser = $container->get('current_user');
    return $instance;
  }

  /**
   * {@inheritdoc}
   */
  public function getBaseFormId() {
    return $this->entity->getEntityTypeId() . '_' . $this->operation . '_form';
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    if (empty($this->formId)) {
      $this->formId = $this->getBaseFormId();
      /** @var \Drupal\commerce_order\Entity\OrderItemInterface $order_item */
      $order_item = $this->entity;
      if ($purchased_entity = $order_item->getPurchasedEntity()) {
        $this->formId .= '_' . $purchased_entity->getEntityTypeId() . '_' . $purchased_entity->id();
      }
    }

    return $this->formId;
  }

  /**
   * {@inheritdoc}
   */
  public function setFormId($form_id) {
    $this->formId = $form_id;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $original_form = $form;
    $form = parent::buildForm($form, $form_state);
    /** @var \Drupal\commerce_order\Entity\OrderItemInterface $order_item */
    $order_item = $this->entity;
    // The widgets are allowed to signal that the form should be hidden
    // (because there's no purchasable entity to select, for example).
    if ($form_state->get('hide_form')) {
      $form['#access'] = FALSE;
    }
    else {
      $selected_variation = $form_state->get('selected_variation');
      // If the order item references a different variation than the one
      // currently selected, and the selected variation is supposed to use
      // a different order item type, rebuild the form.
      if ($selected_variation && $order_item->getPurchasedEntityId() != $selected_variation) {
        /** @var \Drupal\commerce_product\Entity\ProductVariationInterface $selected_variation */
        $selected_variation = $this->entityTypeManager->getStorage('commerce_product_variation')->load($selected_variation);
        if ($selected_variation->getOrderItemTypeId() !== $order_item->bundle()) {
          /** @var \Drupal\commerce_order\OrderItemStorageInterface $order_item_storage */
          $order_item_storage = $this->entityTypeManager->getStorage('commerce_order_item');
          $order_item = $order_item_storage->createFromPurchasableEntity($selected_variation);
          $this->prepareOrderItem($order_item);
          $this->setEntity($order_item);
          $form_display = EntityFormDisplay::collectRenderDisplay($order_item, $this->operation);
          $this->setFormDisplay($form_display, $form_state);
          $form = $original_form;
          $form = parent::buildForm($form, $form_state);
        }
      }
    }

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function setFormDisplay(EntityFormDisplayInterface $form_display, FormStateInterface $form_state) {
    $component = $form_display->getComponent('purchased_entity');
    // If the product references variations of a different type, fallback
    // to using the title widget as the attributes widget cannot properly
    // work.
    if ($component && $component['type'] === 'commerce_product_variation_attributes') {
      $product = $form_state->get('product');
      /** @var \Drupal\commerce_product\ProductVariationStorageInterface $product_variation_storage */
      $product_variation_storage = $this->entityTypeManager->getStorage('commerce_product_variation');
      $variations = $product_variation_storage->loadEnabled($product);

      $variation_types = [];
      foreach ($variations as $variation) {
        $variation_types[$variation->bundle()] = $variation->bundle();
        if (count($variation_types) > 1) {
          $component['type'] = 'commerce_product_variation_title';
          $form_display->setComponent('purchased_entity', $component);
          $this->setFormDisplay($form_display, $form_state);
          break;
        }
      }
    }
    return parent::setFormDisplay($form_display, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  protected function actions(array $form, FormStateInterface $form_state) {
    $actions['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Add to cart'),
      '#submit' => ['::submitForm'],
      '#attributes' => [
        'class' => ['button--add-to-cart'],
      ],
    ];

    return $actions;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    /** @var \Drupal\commerce_order\Entity\OrderItemInterface $order_item */
    $order_item = $this->entity;
    /** @var \Drupal\commerce\PurchasableEntityInterface $purchased_entity */
    $purchased_entity = $order_item->getPurchasedEntity();

    $cart = $order_item->getOrder();
    if (!$cart) {
      $order_type_id = $this->orderTypeResolver->resolve($order_item);
      $store = $this->selectStore($purchased_entity);
      $cart = $this->cartProvider->createCart($order_type_id, $store);
    }
    // Ensure we're adding an order_item, not amending one loaded from cache.
    if (!$order_item->isNew()) {
      $order_item = $order_item->createDuplicate();
    }
    $this->entity = $this->cartManager->addOrderItem($cart, $order_item, $form_state->get([
      'settings',
      'combine',
    ]));
    // Other submit handlers might need the cart ID.
    $form_state->set('cart_id', $cart->id());
  }

  /**
   * {@inheritdoc}
   */
  public function buildEntity(array $form, FormStateInterface $form_state) {
    /** @var \Drupal\commerce_order\Entity\OrderItemInterface $entity */
    $entity = parent::buildEntity($form, $form_state);
    $this->prepareOrderItem($entity);
    return $entity;
  }

  /**
   * Helper function used to prepare the order item for add to cart.
   *
   * @param \Drupal\commerce_order\Entity\OrderItemInterface $order_item
   *   The order item to prepare.
   */
  protected function prepareOrderItem(OrderItemInterface $order_item) {
    // Now that the purchased entity is set, populate the title and price.
    $purchased_entity = $order_item->getPurchasedEntity();
    $order_item->setTitle($purchased_entity->getOrderItemTitle());
    if (!$order_item->isUnitPriceOverridden()) {
      $store = $this->selectStore($purchased_entity);
      $context = new Context($this->currentUser, $store);
      $resolved_price = $this->chainPriceResolver->resolve($purchased_entity, $order_item->getQuantity(), $context);
      $order_item->setUnitPrice($resolved_price);
    }
    $order_type_id = $this->orderTypeResolver->resolve($order_item);
    $store = $this->selectStore($purchased_entity);
    $cart = $this->cartProvider->getCart($order_type_id, $store);
    if ($cart) {
      $order_item->set('order_id', $cart->id());
    }
  }

}
