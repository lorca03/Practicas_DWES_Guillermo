<?php
class Usuario
{

    public $nombre;
    public $apellido;

    public function __construct($nombre,$apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setNombre($nombre)
    {
         $this->nombre=$nombre;
    }
    public function setApellido($apellido)
    {
         $this->apellido=$apellido;
    }
}

$usuario1=new Usuario("Pepe","Lopez");
$usuario1->setNombre("Antonio");
echo $usuario1->getNombre();
echo $usuario1->getApellido();

