<?php
abstract class Operaciones
{
    public  $valor1;
    public $valor2;

    public function mostrarResultado($resultado)
    {
        echo $resultado;
    }

    abstract public function operar();

    public function setValor1($valor1)
    {
        $this->valor1 = $valor1;
    }
    public function setValor2($valor2)
    {
        $this->valor2 = $valor2;
    }
}
class Suma extends Operaciones
{
    public function operar()
    {
        Operaciones::mostrarResultado(Operaciones::$valor1 + Operaciones::$valor2);
    }
}
class Resta extends Operaciones
{
    public function operar()
    {
        Operaciones::mostrarResultado(Operaciones::$valor1 - Operaciones::$valor2);
    }
}

$suma = new Suma();
$suma->setValor1(2);
$suma->setValor2(3);
$suma->operar();

$resta = new Resta();
$resta->setValor1(2);
$resta->setValor2(3);
$resta->operar();
