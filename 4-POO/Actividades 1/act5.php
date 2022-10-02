<?php
class Persona
{
    public $edad;
    public $nombre;
    public $apellidos;

    public function __construct($edad,$nombre="",$apellidos="")
    {
        $this->edad = $edad;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
    }

    public function mayorDeEdad()
    {
        return $this->edad>=18?"Es mayor de edad":"No es mayor de edad";
    }
}

$jose=new Persona(18,"Jose","Lopez Peñas");
echo $jose->mayorDeEdad();
$pepe=new Persona(17);
echo $pepe->mayorDeEdad();
