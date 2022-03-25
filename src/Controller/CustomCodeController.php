<?php
/**
 * @file
 * Contains \Drupal\customcode\Controller\FirstController.
 */

namespace Drupal\customcode\Controller;
use Drupal\Core\Controller\ControllerBase;


/**
 * CustomCodeController
 */
class CustomCodeController extends ControllerBase {

	//For Complete Chargesheet
  public function page() {
		
		$myhtml = "<h1>My Custom Page</h1>";
		$myhtml .= "<p>This is my awesome custom page with html</p>";
		
		$build = [
					'#markup' => $this->t($myhtml),
		];
		
    return $build;
  }
}