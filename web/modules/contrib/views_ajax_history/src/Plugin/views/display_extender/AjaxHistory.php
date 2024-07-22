<?php

namespace Drupal\views_ajax_history\Plugin\views\display_extender;

use Drupal\views\Plugin\views\display_extender\DisplayExtenderPluginBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Ajax history display extender plugin.
 *
 * @ingroup views_display_extender_plugins
 *
 * @ViewsDisplayExtender(
 *   id = "ajax_history",
 *   title = @Translation("AJAX history"),
 *   help = @Translation("Enable the AJAX history feature for the current view."),
 *   no_ui = FALSE,
 * )
 */
class AjaxHistory extends DisplayExtenderPluginBase {

  /**
   * {@inheritdoc}
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    if ($form_state->get('section') == 'use_ajax') {
      // Add opportunity to enable view ajax history handler for this view.
      $form['enable_history'] = [
        '#title' => $this->t('AJAX history'),
        '#type' => 'checkbox',
        '#description' => $this->t('Enable Views AJAX history.'),
        '#default_value' => isset($this->options['enable_history']) ? $this->options['enable_history'] : 0,
        '#states' => [
          'visible' => [
            ':input[name="use_ajax"]' => ['checked' => TRUE],
          ],
        ],
      ];
    }
  }

  /**
   * {@inheritdoc}
   */
  public function validateOptionsForm(&$form, FormStateInterface $form_state) {
    if ($form_state->hasValue('use_ajax') && $form_state->getValue('use_ajax') != TRUE) {
      // Prevent use ajax history when ajax for view are disabled.
      $form_state->setValue('enable_history', FALSE);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitOptionsForm(&$form, FormStateInterface $form_state) {
    if ($form_state->get('section') == 'use_ajax') {
      $this->options['enable_history'] = $form_state->getValue('enable_history');
    }
  }

}
