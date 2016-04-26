/**
 * @file
 * Contains \Drupal\whereami\Controller\WhereController
 */

 namespace Drupal\whereami\Controller;

 use Drupal\Core\Controller\ControllerBase;

 class WhereController extends ControllerBase {
   public function content() {
     return array(
     '#type' => 'markup',
     '#markup' => $this->('Hello World'),
     );
   }
 }
