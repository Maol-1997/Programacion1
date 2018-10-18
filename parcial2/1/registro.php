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
$sql = "SELECT * FROM usuario; ";
$ejecucionSQL = $conexion->prepare($sql);
$ejecucionSQL ->execute($params);
$res = $ejecucionSQL->fetchAll();
foreach($res as $rs){
    if($rs['usuario'] == $user){
        $existe = 1;
        break;
    }
}
if($existe == 1){
    header('Location: inicio.html');
}else{
$sql = "INSERT INTO `programacion1`.`usuario` (`usuario`, `clave`) VALUES ($user, $pass); ";
$ejecucionSQL = $conexion->prepare($sql);
$ejecucionSQL ->execute($params);
header('Location: inicio.html');
}
?>
</body>
</html>
