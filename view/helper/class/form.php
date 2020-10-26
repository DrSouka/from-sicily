<?php
/**
 * User: Samuel Meyer
 * Date: 25.10.2020
 * Updated by :
 *
 */

function write_form($form){
  $title = $form['title'];
  $method = $form['method'];
  $action = $form['action'];

  echo "<form method='". $method ."' action='index.php?action=". $action ."'>";
  echo '<h2>'. $title .'</h2>';

  foreach($form['elements'] as $element => $properties){
    if(
      is_string($element) &&
      !$properties
    ){
      echo '<p>'. $element .'</p>';
    }
    elseif(array_key_exists('action', $properties)){
      echo "<a href='index.php?action=". $properties['action'] ."'>". $element ."</a>";
    }
    elseif(
      array_key_exists('form_item', $properties) &&
      array_key_exists('type', $properties)
    ){
      echo "<". $properties['form_item'] ." type='". $properties['type'] ."'>". $element ."</". $properties['form_item'] .">";
    }elseif(
      array_key_exists('type', $properties) &&
      array_key_exists('name', $properties)
    ){
      if(!array_key_exists('required', $properties)){$properties['required'] = false;}

      echo '<label>'. $element .'</label>';
      echo "<input type='". $properties['type'] ."' name='". $properties['name'];

      if(array_key_exists('placeholder', $properties)){
        echo " placeholder='". $properties['placeholder'] ."'";
      }
      if($properties['required']){
        echo ' required>';
      }else{
        echo ' >';
      }
    }
  }
}
