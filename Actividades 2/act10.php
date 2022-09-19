<?php
 $horas=$_POST["Horas"];
 $horasEX=$_POST["HorasEX"];
 $sueldo=(11*$horas)+(15*$horasEX);
 echo "Sueldo: ".$sueldo."€";