<?php

/**
 * @file
 * Contains \Drupal\authorization_drupal_roles\Plugin\authorization\consumer\DrupalRolesConsumer.
 */

namespace Drupal\authorization_drupal_roles\Plugin\authorization\consumer;

use Drupal\Core\Form\FormStateInterface;

use Drupal\authorization\Consumer\ConsumerPluginBase;
/**
 * @AuthorizationConsumer(
 *   id = "authorization_drupal_roles",
 *   label = @Translation("Drupal Roles"),
 *   description = @Translation("LDAP provider to the Authorization API.")
 * )
 */
class DrupalRolesConsumer extends ConsumerPluginBase {

  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::validateConfigurationForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);
  }
}