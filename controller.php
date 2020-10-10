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
   require 'view/'. $_GET['action'] .'.php';

   $content = ob_get_clean();
   require "view/template.php";
 }

 function home(){
   page_constructor("Home");
 }

 function about_us(){
   page_constructor("About Us");
 }

 function menu(){
   page_constructor("Menu");
 }

 function gallery(){
   page_constructor("Gallery");
 }

 function reservation(){
   page_constructor("Reservation");
 }

 function order(){
   page_constructor("Order");
 }

 function sign_in(){
   page_constructor("Sign In");
 }

 function sign_out(){
   page_constructor("Sign Out");
 }

 function sign_up(){
   page_constructor("Sign Up");
 }
