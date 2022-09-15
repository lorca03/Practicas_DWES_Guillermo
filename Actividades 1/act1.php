<?php  
        $coche="Nissan";

        function dimeCoche(){

            global $coche;
            $coche="La marca del coche es " . $coche;
        }

        dimeCoche();
        echo $coche;
?>