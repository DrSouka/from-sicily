<?php
/**
 * User: Samuel Meyer
 * Date: 10.10.2020
 * Updated by :
 *
 */

$menu = array();


$page = new MenuElement();
$page->set_Title('HOME');
$menu[] = $page;


$page = new MenuElement();
$page->set_Title('ABOUT US');
$menu[] = $page;


$page = new MenuElement();
$page->set_Title('MENU');

$subpage = new MenuElement();
$subpage->set_Title("DAY'S SPECIAL");
$subpage->set_Action('days_special');
$page->dropdown[] = $subpage;

$subpage = new MenuElement();
$subpage->set_Title('ENTREES');
$page->dropdown[] = $subpage;

$subpage = new MenuElement();
$subpage->set_Title('SANDWICHS');
$page->dropdown[] = $subpage;

$subpage = new MenuElement();
$subpage->set_Title('PASTAS');
$page->dropdown[] = $subpage;

$subpage = new MenuElement();
$subpage->set_Title('PIZZAS');
$page->dropdown[] = $subpage;

$subpage = new MenuElement();
$subpage->set_Title('SALADS');
$page->dropdown[] = $subpage;

$subpage = new MenuElement();
$subpage->set_Title('DRINKS');
$page->dropdown[] = $subpage;

$subpage = new MenuElement();
$subpage->set_Title('WINES');
$page->dropdown[] = $subpage;

$menu[] = $page;


$page = new MenuElement();
$page->set_Title('GALLERY');
$menu[] = $page;


$page = new MenuElement();
$page->set_Title('RESERVATION');
$menu[] = $page;


$page = new MenuElement();
$page->set_Title('ORDER');
$menu[] = $page;


$page = new MenuElement();
$page->set_Title('SIGN IN');
$page->set_Type('feature');
$menu[] = $page;


$page = new MenuElement();
$page->set_Title('SIGN UP');
$page->set_Type('feature');
$menu[] = $page;


$page = new MenuElement();
$page->set_Title('PROFILE');
$page->set_Privilege(1);

$subpage = new MenuElement();
$subpage->set_Title('ORDERS');
$page->dropdown[] = $subpage;

$subpage = new MenuElement();
$subpage->set_Title('RESERVATIONS');
$page->dropdown[] = $subpage;

$subpage = new MenuElement();
$subpage->set_Title('CLIENTS');
$subpage->set_Privilege(2);
$page->dropdown[] = $subpage;

$subpage = new MenuElement();
$subpage->set_Title('DISHES');
$subpage->set_Privilege(2);
$page->dropdown[] = $subpage;

$subpage = new MenuElement();
$subpage->set_Title('INGREDIENTS');
$subpage->set_Privilege(2);
$page->dropdown[] = $subpage;

$subpage = new MenuElement();
$subpage->set_Title('SETTINGS');
$page->dropdown[] = $subpage;

$subpage = new MenuElement();
$subpage->set_Title('SIGN OUT');
$page->dropdown[] = $subpage;

$menu[] = $page;
