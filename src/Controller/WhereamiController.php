<?php
/**
 * @file
 * Contains \Drupal\whereami\Controller\WhoamiController
 */

 namespace Drupal\whereami\Controller;

 use Drupal\Core\Controller\ControllerBase;

 class WhereamiController extends ControllerBase {
   public function content() {
     return array(
       '#type' => 'markup',
       '#markup' => $this->t('Where Am I'),
     );
   }
 }
