<?php
/**
 * User: Samuel Meyer
 * Date: 09.10.2020
 * Updated by :
 *
 */

/* session_start(); */
require "controller.php";

$errorMessages = array();

/*
try{
	$db = new Db;
}catch (PDOException $exception) {
    echo 'Connection failed: ' . $exception->getMessage();
    die();
}
*/

if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {

    /*
     *
     *  PAGES
     *
     */

    case 'home' :
      home();
    break;

    case 'about-us' :
     about_us();
    break;

    case 'menu' :
      menu();
    break;

    case 'gallery' :
     gallery();
    break;

    case 'reservation' :
      reservation();
    break;

    case 'order' :
      order();
    break;

    case 'profile' :
      profile();
    break;

    /*
     *
     *  FEATURES
     *
     */

    case 'sign-in' :
      sign_in($_POST);
    break;

    case 'sign-out' :
      sign_out();
    break;

    case 'sign-up' :
      sign_up($_POST);
    break;

    /* DEFAULT */
    default :
      home();
    break;
  }
}
else {
  home();
}
