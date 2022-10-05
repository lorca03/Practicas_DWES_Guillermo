<?php
class Personas
{
    private $nombre;
    private $apellidos;
    private $edad;

    public function __construct($nombre,$apellidos,$edad) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function __call($name, $arguments)
    {
        if (substr($name,0,3)=="get") {
            if (substr($name,3)=="nombre") {
                return $this->nombre;
            }
            if (substr($name,3)=="apellidos") {
                return $this->apellidos;
            }
        }
    }
}

$pepe=new Personas("pepe","asensio","19");
echo $pepe->getnombre();