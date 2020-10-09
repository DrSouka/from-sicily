<?php
/**
 * User: Samuel Meyer
 * Date: 09.10.2020
 * Updated by :
 *
 */

 require 'view/helper/import-classes.php';

 function page_constructor($page){
   global $errorMessages;

   ob_start();

   /*
   require "view/viewHelper.php";
   require_once "model/dbManager.php";
   require 'view/menu.php';
   */
   require 'view/'. $page->get_action() .'.php';

   $content = ob_get_clean();
   require "view/template.php";
 }

 function home(){
   $home = new page();
   $home->title = "Home";
   $home->action = "home";

   page_constructor($home);
 }
