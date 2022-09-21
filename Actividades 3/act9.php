<?php
    $num1=2;
    $num2=4;
    $num3=3;
    $numeros=[$num1,$num2,$num3];
    asort($numeros);
    foreach ($numeros as $key => $num) {
        echo $num ."\n";
    }