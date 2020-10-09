<?php
/**
 * User: Samuel Meyer
 * Date: 09.10.2020
 * Updated by :
 *
 */
 
 require 'model/class/page.php';

 function pageEssentials($page){
   global $errorMessages;

   ob_start();

   /*
   require "view/viewHelper.php";
   require_once "model/dbManager.php";
   require 'view/menu.php';
   */
   require 'view/'. $page->get_fileName() .'.php';

   $content = ob_get_clean();
   require "view/template.php";
 }

 function home(){
   $home = new Page();
   $home->title = "Home";
   $home->fileName = "home";

   pageEssentials($home);
 }
