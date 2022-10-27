<?php
try {
    $conexion=new PDO('mysql:host=localhost;dbname=biblioteca','Guille','guille');
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $conexion->exec('SET CHARACTER SET utf8');
} catch (Exception $ex) {
    echo "ERROR: ".$ex->getMessage();
}