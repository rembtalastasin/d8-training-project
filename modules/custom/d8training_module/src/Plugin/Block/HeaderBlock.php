<?php

namespace Drupal\d8training_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\file\Entity\File;
use Drupal\image\Entity\ImageStyle;

/**
 * Provides a 'header' block.
 *
 * @Block(
 *   id = "header",
 *   admin_label = @Translation("Header"),
 *   category = @Translation("D8 Training")
 * )
 */
class HeaderBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $node = \Drupal::routeMatch()->getParameter('node');

    if ($node){
      if ($node->hasField('field_hero_carousel')) {

      }
    }

    $config = \Drupal::config('d8training_module.site_information');

    $build = [
      '#type' => 'markup',
      '#node' => $node,
      '#home_url' => '/',
      '#primary_logo' => [],
      '#secondary_logo' => [],
      //'#email' => $config->get('email'),
      //'#telephone' => $config->get('telephone'),
      '#email' => "email@email.com",
      '#telephone' => "111111",
      '#theme' => 'd8training'
      //'#header_bookmarks' => Helper::getMenu('header-bookmarks'),
      //'#header_menu' => Helper::getMenu('main'),
    ];

    $primary_logo = File::load($config->get('main_logo_black'));
    $secondary_logo = File::load($config->get('main_logo'));

    if ($primary_logo) {
      $build['#primary_logo'] = $primary_logo;
    }

    if ($secondary_logo) {
      $build['#secondary_logo'] = $secondary_logo;
    }

    return $build;
  }
}
