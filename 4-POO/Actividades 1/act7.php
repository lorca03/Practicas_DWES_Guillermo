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
        return $this->titulo;
    }
}
