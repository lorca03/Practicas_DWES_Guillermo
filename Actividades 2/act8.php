<?php
    date_default_timezone_set("Europa");
    $nac=$_POST["Nacimiento"];
    $nac=strtotime($nac);
    $hoy= date("U");
    $edad=$hoy-$nac;
    $años= intval($edad/31536000);
    $meses =intval(($edad%31536000)/2592000);
    $dias =intval((($edad%31536000)%2592000)/86400);
    $horas =intval(((($edad%31536000)%2592000)%86400)/3600);
    $seg =intval(((($edad%31536000)%2592000)%86400)%3600);
    echo "La edad son  ".$años." años,".$meses." meses,".$dias." dias,".$horas." horas,".$seg." segundos";
    