<?php
class Coche
{
    public $marca;
    public $modelo;
    public $año;

    public function __construct($marca,$modelo,$año) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
    }
    public function __toString()
    {
        return "El coche es de la marca " .$this->marca.", el ".$this->modelo.", y es del año ".$this->año;
    }
}
$polo=new Coche("volswagen","polo","2008");
echo $polo;
