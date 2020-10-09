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

    /* HOME */
    case 'home' :
      home();
    break;

    /* PROFILE */
    case 'profile' :
      profile();
    break;

    /*
     *
     *  FEATURES
     *
     */

    /* SIGN IN */
    case 'sign-in' :
      sign_in($_POST);
    break;

    /* SIGN OUT */
    case 'sign-out' :
      sign_out();
    break;

    /* SIGN UP */
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
