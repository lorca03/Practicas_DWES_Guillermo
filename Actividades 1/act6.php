<?php
    $base=$_POST["Base"];
    $exponente=$_POST["Exponente"];
    if ($exponente==0 || $exponente==NULL){
        $exponente=2;
    }
    $cont=1;
    $resultado=$base; 
    while ($cont<$exponente){
        $resultado=$resultado*$base;
        $cont++;
    }
    echo $resultado;