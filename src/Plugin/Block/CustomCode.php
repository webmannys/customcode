<?php

/**
 * @file
 * Contains \Drupal\customcode\Plugin\Block\CustomCode
 */

namespace Drupal\customcode\Plugin\Block;
use Drupal\Core\Block\BlockBase;

/**
 * Provides a Block
 *
 * @Block(
 *   id = "customcode_block",
 *   admin_label = @Translation("Custom Block for code"),
 * )
 */

class CustomCode extends BlockBase{
    /**
     * {@inheritdoc}
     */

    public function build() {

        $date = date("m/d/Y");

        return [
            '#theme' => 'index',
            '#date' => $date,
        ];

    }

    /**
     * {@inheritdoc}
     */
    public function getCacheMaxAge() {
        return 0;
    }

}