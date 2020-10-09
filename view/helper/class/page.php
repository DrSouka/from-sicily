<?php
/**
 * User: Samuel Meyer
 * Date: 09.10.2020
 * Updated by :
 *
 */

class page {
  public $title;
  public $action;

  function set_title($title) {$this->title = $title;}
  function get_title() {return $this->title;}

  function set_action($action) {$this->action = $action;}
  function get_action() {return $this->action;}
}
