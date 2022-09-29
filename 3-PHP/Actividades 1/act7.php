<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operacion = $_POST["operacion"];
switch ($operacion) {
    case '+':
        echo $num1+$num2;
        break;
    case '-':
        echo $num1-$num2;
        break;
    case 'x':
        echo $num1*$num2;
        break;
}
