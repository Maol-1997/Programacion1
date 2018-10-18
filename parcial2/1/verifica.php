<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if(empty($_SESSION['login']))
          header('Location: inicio.html');
      if($_SESSION['rol'] == "admin")
          header('Location: admin.php');
      else
          header('Location: user.php');
     ?>
  </body>
</html>
