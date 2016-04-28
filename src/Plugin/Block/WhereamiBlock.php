<?php

/**
 * Provides a block for the Who Am I module.
 *
 * @Block(
 *  id = "whereami_block",
 *  admin_label = @Translation("Where Am I?"),
 * )
 */

 namespace Drupal\whereami\Plugin\Block;

 use Drupal\Core\Block\BlockBase;

 class WhereamiBlock extends BlockBase {
   /**
    * {@inheritdoc}
    */

   public function build() {
     $url = $_SERVER['HTTP_HOST'];
     $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

     return array(
       '#type' => 'markup',
       '#markup' => "<p>Site URL: " . $url . "</p>
       <p>Site Host: " . $hostname . "</p>",
       '#theme' => 'block_whereami',
       '#attached' => array(
         'library' =>  array(
           'whereami/whereami'
         ),
       ),
     );
    }
 }
