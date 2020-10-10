<DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8" />

   <title>From Sicily - <?=$page;?></title>

   <!--<link href="view/content/style/style.css" rel="stylesheet" type="text/css" />-->
 </head>
 <body>
   <div class="header">
     <div class="menu">
       <a class="menu-page" href="index.php?action=home">Home</a>
       <a class="menu-page" href="index.php?action=about-us">About Us</a>
       <a class="menu-page" href="index.php?action=menu">Menu</a>
       <a class="menu-page" href="index.php?action=gallery">Gallery</a>
       <a class="menu-page" href="index.php?action=reservation">Reservation</a>
       <a class="menu-page" href="index.php?action=order">Order</a>
       <a class="menu-form" href="index.php?action=sign-in">Sign In</a>
       <a class="menu-form" href="index.php?action=sign-up">Sign Up</a>
     </div>
   </div>
   <div class="content">
     <?=$content; ?>
   </div>
 </body>
 </html>
