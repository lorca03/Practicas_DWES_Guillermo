<?php
    $aleatorio=Rand(0,3);
    $num = $_POST["num"];
    if ($num==$aleatorio){
        echo "has acertado";
    }else{
        echo "has fallado";
    }