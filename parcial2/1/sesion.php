<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        include("conexion.php");
        $params= array('usuario'=>$user,'clave' => $pass);
        $sql = "SELECT * FROM usuario WHERE usuario = :usuario AND clave = :clave";
        $ejecucionSQL = $conexion->prepare($sql);
        $ejecucionSQL ->execute($params);
        $res = $ejecucionSQL->fetchAll();
        $count = $ejecucionSQL->rowCount();
        foreach($res as $rs) {
            if ($count > 0 && $rs['habilitado'] == 1) {
                $_SESSION["user"] = $rs['usuario'];
                $_SESSION["login"] = 1;
                $_SESSION["rol"] = $rs['rol'];
                header('Location: verifica.php');
                exit;
            } else {
                header('Location: inicio.html');
                exit;
            }
        }
         ?>
  </body>
</html>
