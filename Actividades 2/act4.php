<?php
    $contra=$_POST["Contraseña"];
    $usu=$_POST["Usuario"];
    $resultado= $contra==$usu ? "la contraseña es correcta" : "La contraseña no es correcta";
    echo $resultado;