<?php

$archivo = $_FILES["img"];
$tipo = $archivo["type"];
$nombre = $archivo["name"];

if ($tipo == "image/png" || $tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/gif") {
    if (!is_dir("imagenes")) {
        mkdir("imagenes", 0777);
    }
    $enviada = move_uploaded_file($archivo["tmp_name"], "imagenes/" . $nombre);
    if ($enviada) {
        echo "Se ha guardado con exito";
    } else {
        echo "No se ha podido guardar";
    }
}
header("refresh:5,url=../Actividades 6/act3visualizar.php");

if (isset($_POST["visualizar"])) {
    if (is_dir("./imagenes")) {
        $gestor = opendir("./imagenes");
        if ($gestor) {
            while (($image = readdir($gestor))) {
                if ($image != "." && $image != "..") {
                    echo "<img src='imagenes/$image' style='width:100px;height:100px;'> <br>";
                }
            }
        }
    } else {
        echo "No tienes la carpeta imagenes creada";
    }
}
