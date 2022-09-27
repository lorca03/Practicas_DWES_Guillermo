<?php

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$email = $_POST["email"];
$contra = $_POST["contra"];
$error = "error_faltandatos";
if (!empty($nombre) && !empty($edad) && !empty($contra) && !empty($email)) {
    $error = "ok";
    if (!preg_match("/^[a-zA-Z]+/", $nombre)) {
        $error = "error-nombre";
    }
    if (!preg_match("/[0-9]+/", $edad)) {
        $error = "error-edad";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "error-email";
    }
    if (strlen($contra) < 6) {
        $error = "error-contra";
    }
}
if ($error != "ok") {
    header("location:http://localhost/Servidor/actividades%206/act1.php?error=$error");
} else {
    echo "Los datos son correctos<br>Nombre:".$nombre."<br>Edad:".$edad."<br>Email:".$email."<br>Contraseña:".$contra;
    
}
