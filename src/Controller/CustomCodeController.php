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
		
		$output=null;
		
		exec('php modules/custom/customcode/includes/phpcs.phar modules/custom/customcode', $output);

		$body = '';
		
		foreach ($output as $line)
		{
			$body .= $line."<br />";
		}
		
		$myhtml = "<h1>PHP Codesniffer Output</h1>";
		$myhtml .= $body;
		
		$build = [
					'#markup' => $this->t($myhtml),
		];
		
    return $build;
  }
}