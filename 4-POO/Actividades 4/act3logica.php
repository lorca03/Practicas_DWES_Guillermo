<?php

if (isset($_POST["enviar"])) {
    $archivos = $_FILES["img"]["name"];
    $archivostemp = $_FILES["img"]["tmp_name"];
    for ($i = 0; $i < count($archivos); $i++) {
        $nombre = substr($archivos[$i], 0, strpos($archivos[$i], "."));
        $tipo = substr($archivos[$i], strpos($archivos[$i], ".") + 1, strlen($archivos[$i]));
        if ($tipo == "png" || $tipo == "jpg" || $tipo == "jpeg" || $tipo == "gif") {
            if (!is_dir("imagenes")) {
                echo "hola";
                mkdir("imagenes", 0777);
            }
            $enviada = move_uploaded_file($archivostemp[$i], "imagenes/" . $nombre);
            if ($enviada) {
                echo "Se ha guardado con exito\n";
            } else {
                echo "No se ha podido guardar\n";
            }
        }
    }
}

header("refresh:5,url=./act3form.php");

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

if (isset($_POST["zip"])) {
    if (is_dir("./imagenes")) {
        $zip = new ZipArchive();
        $zip->open("fotos.zip", ZipArchive::CREATE);
        $zip->addEmptyDir("imagenes/");
        $zip->close();
        header("Content-type: application/octet-stream");
        header("Content-disposition: attachment; filename=fotos.zip");
        readfile('fotos.zip');
        unlink('fotos.zip');
    } else {
        echo "No tienes la carpeta imagenes creada";
    }
}
