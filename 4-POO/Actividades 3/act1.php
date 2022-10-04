<?php
trait Nombre
{
    public function mostrarNombre(){
        echo $this->nombre;
    }
}
class Coche 
{
    public $nombre;
    public $marca;

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    use Nombre;
    
}
class Personal 
{
    public $nombre;
    public $apellidos;
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    use Nombre;
}

$golf=new Coche();
$golf->setNombre("Golf\n");
$golf->mostrarNombre();

$pepe=new Personal();
$pepe->setNombre("Pepe");
$pepe->mostrarNombre();
