<?php
    $num=23;
    $suma=0;
    $cont=0;
    for ($i=5; $i <= $num; $i=$i+5) { 
        $suma=$suma+$i;
        $cont++;
    }
    echo "Hay ".$cont." multiplos y su suma es ".$suma;