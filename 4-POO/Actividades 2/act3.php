<?php
class Vehiculo
{
    static $vehiculosCreados;
    static $kmTotales;
    
    public function getVehiculosCreados()
    {
        return $this->vehiculosCreados;
    }
    public function getKmTotales()
    {
        return $this->kmTotales;
    }
    public function getKmRecorridos()
    {
        return $this->kmRecorridos;
    }
}
class Bicicleta extends Vehiculo
{
    public $kmRecorridos;
    function __construct()
    {
        Vehiculo::$vehiculosCreados ++;
    }
    public function recorrer($km)
    {
        $this->kmRecorridos+=$km;
        Vehiculo::$kmTotales += $km;
    } 
    public function getKmRecorridos()
    {
        return $this->kmRecorridos;
    }
}
class Coche extends Vehiculo
{
    public $kmRecorridos;
    function __construct()
    {
        Vehiculo::$vehiculosCreados ++;
    }
    public function recorrer($km)
    {
        $this->kmRecorridos+=$km;
        Vehiculo::$kmTotales += $km;
    }
    public function getKmRecorridos()
    {
        return $this->kmRecorridos;
    }
    
}

$bici=new Bicicleta();
$coche=new Coche();
$bici->recorrer(20);
$coche->recorrer(30);
echo $bici->getKmRecorridos()."\n";
echo $coche->getKmRecorridos() ."\n";
echo Vehiculo::$kmTotales ."\n";
echo Vehiculo::$vehiculosCreados;

