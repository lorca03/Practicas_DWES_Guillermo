<?php
    date_default_timezone_set("Europe/Madrid");
    $nac=$_POST["Nacimiento"];
    $nac=strtotime($nac);
    $hoy= date("U");
    $edad=$hoy-$nac;
    $conv=[31536000,2592000,86400,3600];
    $años= intval($edad/$conv[0]);
    $meses =intval(($edad%$conv[0])/$conv[1]);
    $dias =intval((($edad%$conv[0])%$conv[1])/$conv[2]);
    $horas =intval(((($edad%$conv[0])%$conv[1])%$conv[2])/$conv[3]);
    $seg =intval(((($edad%$conv[0])%$conv[1])%$conv[2])%$conv[3]);
    echo "La edad son  ".$años." años, ".$meses." meses, ".$dias." dias, ".$horas." horas, ".$seg." segundos";
    