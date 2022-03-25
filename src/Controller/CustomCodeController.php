<?php
/**
 * Controller File Doc Comment
 * 
 * PHP version 7
 *
 * @category Controller
 * @package  Customcode
 * @author   Manny Sangha <webmannys@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/drupal/customcode
 * @file
 * Contains \Drupal\customcode\Controller\FirstController.
 */

namespace Drupal\customcode\Controller;
use Drupal\Core\Controller\ControllerBase;


/**
 * CustomCodeController
 *
 * @category Controller
 * @package  Customcode
 * @author   Manny Sangha <webmannys@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/drupal/customcode
 */
class CustomCodeController extends ControllerBase
{
    /**
     * CustomCodeController
     *
     * @category Controller
     * @package  Customcode
     * @author   Manny Sangha <webmannys@gmail.com>
     * @license  https://opensource.org/licenses/MIT MIT License
     * @link     http://localhost/drupal/customcode
     * @return   string
     */
    public function page()
    {
        
        $myhtml = "<h1>My Custom Page</h1>";
        $myhtml .= "<p>This is my awesome custom page with html</p>";
        
        $build = [
        '#markup' => $this->t($myhtml),
        ];
        
        return $build;
    }
}