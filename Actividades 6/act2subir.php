<?php

$archivo=$_FILES["img"];
$tipo=$archivo["type"];
$nombre=$archivo["name"];

if ($tipo == "image/png" ||$tipo == "image/jpg" ||$tipo == "image/jpeg" ||$tipo == "image/gif") {
    if (!is_dir("imagenes")) {
        mkdir("imagenes",0777);
    }
    move_uploaded_file($nombre,"imagenes/$nombre");
}
