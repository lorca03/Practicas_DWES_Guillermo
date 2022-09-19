<?php
    $tabla=8;
    for ($i=0; $i<=10; $i++) { 
        if ($i==5) {
            echo "Este paso me lo salto";
            continue;
        }
        echo ($tabla*$i) . "\n";
    }