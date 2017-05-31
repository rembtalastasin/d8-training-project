<?php
namespace Drupal\d8training_module;
use Drupal\Core\Menu\MenuTreeParameters;


class SiteMenu {
  
  protected function simplifyLinks(array $links, $submenu_key = 'sub_menu') {
    $current_path =  \Drupal::service('path.current')->getPath();
    $result = [];
    foreach ($links as $item) {
      $is_active = false;
      if ($item->link->getUrlObject()->toString() == $current_path) {
        $is_active = true;
      }
      $simplified_link = [
        'name' => $item->link->getTitle(),
        'url' => $item->link->getUrlObject()->toString(),
        'active' => $is_active,
      ];
      if ($item->hasChildren) {
        $simplified_link[$submenu_key] = $this->simplifyLinks($item->subtree);
        foreach ($simplified_link[$submenu_key] as $submenu) {
          if ($submenu['active'] == true) {
            $simplified_link['active'] = true;
            break;
          }
        }
      } 
      $result[] = $simplified_link;
    }
    return $result;
  }
  
  
  public function getMenu($menuId) {
    $menu_tree = \Drupal::menuTree();
    $parameters = new MenuTreeParameters();
    $parameters->onlyEnabledLinks();
    $manipulators = [
      ['callable' => 'menu.default_tree_manipulators:checkAccess'],
      ['callable' => 'menu.default_tree_manipulators:generateIndexAndSort'],
    ];
    $nav_tree = $menu_tree->load($menuId, $parameters);
    $nav_tree = $menu_tree->transform($nav_tree, $manipulators);
    return [
      'items' => $this->simplifyLinks($nav_tree),
    ];
  }
}