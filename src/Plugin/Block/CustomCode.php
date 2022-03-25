<?php

/**
 * Block Plugin File Doc Comment
 * 
 * PHP version 7
 *
 * @category Plugin
 * @package  Customcode
 * @author   Manny Sangha <webmannys@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/drupal/customcode
 * @file
 * Contains \Drupal\customcode\Plugin\Block\CustomCode
 */

namespace Drupal\customcode\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a Block
 *
 * @category Plugin
 * @package  Customcode
 * @author   Manny Sangha <webmannys@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/drupal/customcode
 * @Block(
 *   id = "customcode_block",
 *   admin_label = @Translation("Custom Block for code"),
 * )
 */

class CustomCode extends BlockBase
{
    /**
     * {@inheritdoc}
     *
     * @return date
     */
    public function build()
    {

        $date = date("m/d/Y");

        return [
            '#theme' => 'index',
            '#date' => $date,
        ];

    }

    /**
     * {@inheritdoc}
     *
     * @return int
     */
    public function getCacheMaxAge()
    {
        return 0;
    }

}