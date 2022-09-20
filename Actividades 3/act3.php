<?php
    $a=$_POST["A"];
    $b=$_POST["B"];
    $c=$_POST["C"];
    $resultado="";
    $x1=0;
    $x2=0;
    if ($b==0) {
        $resultado="No solucion";
    }else {
        if ($c==0) {
            $x1=0;
            $x2=(-$b)/($a);
            $resultado="La x1:".$x1." y la x2:".$x2;
        }
        else {
            $x1=(-$c)/($b);
            $resultado="La x1:".$x1;
        }
    }
    if ($a==0 && $b==0 && $c==0) {
        $resultado="Infinitas soluciones";
    }
    if ($a!=0 && $b!=0&&$c!=0) {
        $raiz=($b*$b)-(4*$a*$c);
        if ($raiz<0) {
            $resultado="No solucion real";
        }else {
            $x1=((-$b)+sqrt($raiz))/(2*$a);
            $x2=((-$b)-sqrt($raiz))/(2*$a);
            $resultado="La x1:".$x1." y la x2:".$x2;
        }
    }
    echo $resultado;