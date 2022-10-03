<?php
class Formato
{
    public $titulo;
    public $alineacion;
    public $fondo;
    public $fuente;
    public function __construct($titulo, $alineacion, $fondo, $fuente)
    {
        $this->titulo = $titulo;
        $this->alineacion = $alineacion;
        $this->fondo = $fondo;
        $this->fuente = $fuente;
    }
    public function mostrarTitulo()
    {
        echo "<h1 style='background-color:".$this->fondo ."; color:".$this->fuente ." ; text-align:".$this->alineacion ." ;' >".$this->titulo."</h1>";
    }
}

$titulo=new Formato("Hola mundo","center","red","blue");
$titulo->mostrarTitulo();



