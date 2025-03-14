<?php

namespace Drupal\Tests\commerce_log\Functional;

use Drupal\Component\Utility\Html;
use Drupal\Tests\commerce_order\Functional\OrderBrowserTestBase;
use Drupal\commerce_order\Entity\Order;

/**
 * Tests the order admin.
 *
 * @group commerce
 * @group commerce_log
 */
class OrderAdminTest extends OrderBrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'commerce_log',
  ];

  /**
   * {@inheritdoc}
   */
  protected function getAdministratorPermissions() {
    return array_merge([
      'administer commerce_order',
      'administer commerce_order_type',
      'access commerce_order overview',
      'add commerce_log commerce_order admin comment',
    ], parent::getAdministratorPermissions());
  }

  /**
   * Tests adding an order comment.
   */
  public function testAddOrderComment() {
    $order_item = $this->createEntity('commerce_order_item', [
      'type' => 'default',
      'unit_price' => [
        'number' => '999',
        'currency_code' => 'USD',
      ],
    ]);
    $order = $this->createEntity('commerce_order', [
      'type' => 'default',
      'mail' => $this->loggedInUser->getEmail(),
      'order_items' => [$order_item],
      'uid' => $this->loggedInUser,
      'store_id' => $this->store,
    ]);

    $test_comment = sprintf('Urgent order for %s!', $this->loggedInUser->getEmail());

    $this->drupalGet($order->toUrl('canonical'));
    $this->assertSession()->pageTextContains('Comment on this order');
    $this->assertSession()->pageTextContains('Your comment will only be visible to users who have access to the activity log.');
    $this->getSession()->getPage()->fillField('Comment', $test_comment);
    $this->getSession()->getPage()->pressButton('Add comment');
    $this->assertSession()->pageTextContainsOnce($test_comment);

    $test_filtered_comment = '<script>alert("hello")</script> test comment';
    $this->getSession()->getPage()->fillField('Comment', $test_filtered_comment);
    $this->getSession()->getPage()->pressButton('Add comment');

    $this->assertSession()->pageTextNotContains($test_filtered_comment);
    $this->assertSession()->pageTextContains(Html::escape($test_filtered_comment));
  }

  /**
   * Tests creating an order.
   */
  public function testCreateOrder() {
    // Create an order through the add form.
    $this->drupalGet('/admin/commerce/orders');
    $this->getSession()->getPage()->clickLink('Create a new order');
    $user = $this->loggedInUser->getAccountName() . ' (' . $this->loggedInUser->id() . ')';
    $edit = [
      'customer_type' => 'existing',
      'uid' => $user,
    ];
    $this->submitForm($edit, (string) $this->t('Create'));
    $order = Order::load(1);
    $this->drupalGet($order->toUrl('canonical'));
    $this->assertSession()->pageTextContains('Order created through the order add form.');
  }

}
