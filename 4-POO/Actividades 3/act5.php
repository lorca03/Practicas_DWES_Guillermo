<?php
class Calculadora
{
    public function sumas($num1, $num2)
    {
        if (!is_numeric($num1) || !is_numeric($num2)) {
            throw new Exception("Tiene que ser un numero");
        }
        return $num1 + $num2;
    }
    public function divisiones($num1, $num2)
    {
        if (!is_numeric($num1) || !is_numeric($num2)) {
            throw new Exception("Tiene que ser un numero");
        }
        if ($num2 == 0) {
            throw new Exception("No se puede dividir entre cero");
        }
        return $num1 / $num2;
    }
    public function raiz($num1)
    {
        if (!is_numeric($num1)) {
            throw new Exception("Tiene que ser un numero");
        }
        if ($num1 < 0) {
            throw new Exception("La raiz no puede ser negativa");
        }
        return sqrt($num1);
    }
}

$calcu = new Calculadora();
echo $calcu->sumas(2, 4) . "<br>";
echo $calcu->divisiones(2, 4) . "<br>";
echo $calcu->raiz(2) . "<br>";

try {
    echo $calcu->sumas(9, 4) . "<br>";
    echo $calcu->divisiones(2, 0) . "<br>";
    echo $calcu->raiz(-6) . "<br>";
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
}
