<?php
$users = array(
    array("ID" => "Martin","password" => "123321", "email" => "m123@gmail.com"),
    array("ID" => "Juan","password" => "Juan456","email" => "j456@gmail.com")
);
$userval = FALSE;
$total = count($users);
for($x = 0; $x < $total; $x++) {
    if($users[$x]["ID"] == $_POST["id"] && $users[$x]["password"] == $_POST["pass"]) {
        echo "El usuario fue validado";
        echo "<br>";
        echo "Su ID es: ".$users[$x]["ID"];
        echo "<br>";
        echo "Su Contraseña es: ".$users[$x]["password"];
        echo "<br>";
        echo "Su Email es: ".$users[$x]["email"];
        echo "<br>";
        $userval = TRUE;
        break;
    }
}
if(!$userval) {
    echo "El usuario ingresado no existe o la contraseña no coincide.";
}