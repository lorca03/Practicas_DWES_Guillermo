<?php
    $a=$_POST["A"];
    $b=$_POST["B"];
    $resultado="";
    if ($a!=0) {
        $resultado=(-$b)/$a;
    }elseif ($b!=0){
        $resultado="No hay solucion";
    }
    echo $resultado;