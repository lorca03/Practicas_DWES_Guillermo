<?php
    $nac=$_POST["Nacimiento"];
    $nac=strtotime($nac);
    $hoy= date("U");
    $edad=$hoy-$nac-1970;
    $edad= gmdate("Y",$edad);
    echo $edad-1970;
    