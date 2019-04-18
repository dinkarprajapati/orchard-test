<?php
namespace Drupal\orchard_test\Controller;

use Drupal\Core\Controller\ControllerBase;

class OrchardController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello Controller!'),
    ];
  }

}