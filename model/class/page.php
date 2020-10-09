<?php
/**
 * User: Samuel Meyer
 * Date: 09.10.2020
 * Updated by :
 *
 */

class Page {
  // Properties
  public $title;
  public $fileName;

  // Methods
  function set_title($title) {
    $this->title = $title;
  }
  function get_title() {
    return $this->title;
  }

  function set_fileName($fileName) {
    $this->fileName = $fileName;
  }
  function get_fileName() {
    return $this->fileName;
  }
}
