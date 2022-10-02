<?php
class Usuario{

    protected $nombre;
    protected $apellido;
    protected $id;

    public function __construct($id){
        $this->id=$id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
       $this->nombre=$nombre;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
       $this->id=$id;
    }

    public function getApellido()
    {
        return $this->nombre;
    }
    public function setApellido($apellido)
    {
       $this->apellido=$apellido;
    }
}

$jose=new Usuario("1");
$jose->setNombre("Jose");
echo $jose->getNombre()." " .$jose->getId();
