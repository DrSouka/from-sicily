<?php
/**
 * User: Samuel Meyer
 * Date: 10.10.2020
 * Updated by :
 *
 */

$menu = array(
  'Home' => array(),
  'About Us' => array(),
  'Menu' => array(
    'dropdown' => array(
      "Today's special" => array(),
      'Entree' => array(),
      'Sandwichs' => array(),
      'Pasta' => array(),
      'Pizza' => array(),
      'Salads' => array(),
      'Drinks' => array(),
      'Wines' => array()
    )
  ),
  'Gallery' => array(),
  'Reservation' => array(),
  'Order' => array(),
  'Sign In' => array(),
  'Sign Up' => array(
    'type' => 'feature'
  ),
  'Profile' => array(
    'privilege' => 1,
    'dropdown' => array(
      "Orders" => array(),
      'Reservations' => array(),
      'Clients' => array(
        'privilege' => 2
      ),
      'Dishes' => array(
        'privilege' => 2
      ),
      'Ingredients' => array(
        'privilege' => 2
      ),
      'Settings' => array(),
      'Sign Out' => array()
    )
  )
);

function create_menu($menu){
  foreach($menu as $menu_key => $properties){
    write_page($menu_key, $properties);
    if(!array_key_exists('dropdown', $properties)){
      foreach($properties['dropdown'] as $submenu_key){
        write_page($submenu_key, $properties);
      }
    }
  }
}

function write_page($menu_element, $properties){
  if(!array_key_exists('action', $properties)){$properties['action'] = str_replace(' ', '_', strtolower($menu_element));}
  if(!array_key_exists('privilege', $properties)){$properties['privilege'] = 0;}
  if(!array_key_exists('type', $properties)){$properties['type'] = 'page';}
  if($properties['privilege'] == 0){
    echo "<a class='". $properties['type'] ."' href='index.php?action=". $properties['action'] ."'>". $menu_element ."</a>";
  }
}

create_menu($menu);
