<DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8" />

   <title>From Sicily - <?=$page;?></title>

   <link href="view/style/css/body.css" rel="stylesheet" type="text/css" />
   <link href="view/style/css/header.css" rel="stylesheet" type="text/css" />
 </head>
 <body>
   <div class="header">
     <div class="menu">
       <?require 'helper/class/menu.php';?>;
     </div>
   </div>
   <div class="content">
     <?=$content;?>
   </div>
 </body>
 </html>
