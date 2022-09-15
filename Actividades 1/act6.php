<?php
    $base=$_POST["Base"];
    $exponente=$_POST["Exponente"];
    if ($exponente==0 || $exponente==NULL){
        $exponente=2;
    }
    $cont=1;
    $resultado=0; 
    while ($cont<=$exponente){
        $resultado=$resultado+($base*$base);
        $cont++;
    }
    echo $resultado;