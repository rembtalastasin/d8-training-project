<?php

namespace Drupal\d8training_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\file\Entity\File;
use Drupal\image\Entity\ImageStyle;

/**
 * Provides a 'footer' block.
 *
 * @Block(
 *   id = "footer",
 *   admin_label = @Translation("Footer"),
 *   category = @Translation("D8 Training")
 * )
 */
class FooterBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = \Drupal::config('d8training_module.site_information');

    $build = [
      '#type' => 'block',
      //'#footer_bookmarks' => Helper::getMenu('footer-bookmarks'),
      //'#footer_menu' => Helper::getMenu('footer'),
      '#image' => [
        'src' => '/themes/d8training/dist/images/footer-white-logo.png',
        'alt' => 'footer-white-logo.png',
      ],
      '#address' => [
        '#markup' => $config->get('address'),
      ],
      '#email' => [
        '#markup' => $config->get('email'),
      ],
      '#telephone' => [
        '#markup' => $config->get('telephone'),
      ],
      '#copyright' => [
        '#markup' => $config->get('copyright'),
      ]
    ];

    $footer_logo = File::load($config->get('footer_logo'));

    if ($footer_logo) {
      $build['#image'] = $footer_logo;
    }

    return $build;
  }

}
