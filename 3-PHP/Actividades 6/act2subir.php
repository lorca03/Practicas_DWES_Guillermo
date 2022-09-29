<?php

$archivo=$_FILES["img"];
$tipo=$archivo["type"];
$nombre=$archivo["name"];

if ($tipo == "image/png" ||$tipo == "image/jpg" ||$tipo == "image/jpeg" ||$tipo == "image/gif") {
    if (!is_dir("imagenes")) {
        mkdir("imagenes", 0777);
    }
    $enviada=move_uploaded_file($archivo["tmp_name"],"imagenes/".$nombre);
    if ($enviada) {
        echo "Se ha guardado con exito";
    } else {
        echo "No se ha podido guardar";
    }
    header("refresh:5,url=../Actividades 6/act2form.php");
}
