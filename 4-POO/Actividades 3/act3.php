<?php
class Coche
{
    public $marca;
    public $modelo;
    public $año;

    public function __construct($marca,$modelo) {
        $this->marca = $marca;
    }
}