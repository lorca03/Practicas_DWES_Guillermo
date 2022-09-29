<?php
 $horas=$_POST["Horas"];
 $horasex=0;
 if ($horas>40) {
    $horasex=$horas-40;
 }
 $sueldo=(($horas-$horasex)*11)+($horasex*15);
 echo "Sueldo: ".$sueldo."€";
