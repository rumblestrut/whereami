/**
 * @file
 * Contains \Drupal\whoami\Controller\WhoamiController
 */

 namespace Drupal\whoami\Controller;

 use Drupal\Core\Controller\ControllerBase;

 class WhoamiController extends ControllerBase {
   public function content() {
     return array(
     '#type' => 'markup',
     '#markup' => $this->('Hello World'),
     );
   }
 }
