<DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />

  <title>From Sicily - <?=$page;?></title>

  <link rel="stylesheet" href='view/style/css/body.css'>
</head>
<body>
  <style>
    body{
      margin: auto;
      background-image: url('view/style/header-image.jpg');
      background-repeat: no-repeat;
      background-size: 100%;
      background-color: #111;
      font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    }

    .header{
      padding: 5em;
      text-align: right;
      background-color: rgba(1,1,1,.8);
    }

    .menu div{
      display: inline-block;
    }

    .menu a{
      text-decoration: none;
    }

    .menu .page, .feature{
      position: relative;
      font-size: larger;
      color: #ddd;
      letter-spacing: .1em;
    }

    .menu .page{
      padding: 20px;
      text-shadow: 2px 2px 4px #000;
    }

    .menu .page:hover{
      color: #ca9932;
      transition: .3s;
    }

    .menu .feature{
      padding: 10px;
      padding-left: 15px;
      padding-right: 15px;
      margin: 20px;
      border-radius: 3px;
      color: #111;
      background-color: #ca9932;
    }

    .menu .feature:hover{
      background-color: #ddd;
      transition: .3s;
    }

    .menu .dropdown .dropdown-content{
      display: none;
      position: absolute;
      background-color: #333;
      min-width: 100px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,.3);
      margin-top: 10px;
      padding: 5px 10px;
      border-radius: 5px;
      text-align: left;
    }

    .menu .dropdown:hover .dropdown-content{
      display: block;
    }

    .menu .dropdown:hover .dropdown-content a{
      display: block;
      margin: 5px;
      color: #ddd;
      text-shadow: 2px 2px 4px #000;
    }

    .menu .dropdown:hover .dropdown-content a:hover{
      color: #ca9932;
      transition: .3s;
    }
  </style>
  <div class="header">
    <div class="menu">

    <?php
      require 'component/menu.php';
      echo write_menu($menu);
    ?>

    </div>
  </div>
  <div class="content">
  <?=$content;?>
  </div>
</body>
</html>
