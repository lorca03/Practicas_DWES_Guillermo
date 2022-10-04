<?php
interface Ordenador1
{
    public function encender();
    public function apagar();
    public function detectarUSB();
}
class iMac implements Ordenador1
{
    public $modelo;
    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function encender()
    {
        return "Estoy encendido\n";

    }
    public function apagar()
    {
        return "Estoy apagado\n";
    }
    public function detectarUSB()
    {
        return "USB detectado\n";
    }
}

$mac=new iMac();
echo $mac->encender();
echo $mac->apagar();
echo $mac->detectarUSB();
