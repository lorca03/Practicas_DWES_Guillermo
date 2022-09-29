<?php
class Usuario{

    protected $nombre;
    protected $apellido;
    protected $id;

    public function __construct($id){
        $this->id=$id;
    }

}