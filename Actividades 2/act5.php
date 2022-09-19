<?php
$edad = 100;
switch ($edad) {
    case ($edad >= 65):
        echo "Tercera edad (>65 años)";
        break;
    case ($edad >= 27):
        echo "Adultez (27-65 años)";
        break;
    case ($edad >= 18):
        echo "Juventud (14-26 años)";
        break;
    case ($edad >= 12):
        echo "Adolescencia (12-18 años)";
        break;
    case ($edad >= 6):
        echo "Infancia (6-11 años)";
        break;
    default:
        echo "Primera infancia (0-5 años)";
        break;
}
