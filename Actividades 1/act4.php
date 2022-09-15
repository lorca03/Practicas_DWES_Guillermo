<?php
    
    function contador(){
        static $cont=0;
        echo $cont."</br>";
        $cont++;
    }

    contador();
    contador();
    contador();
    contador();