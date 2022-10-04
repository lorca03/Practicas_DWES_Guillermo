<?php
 class Cadena
{
    
    static public function numCaracteres($cadena){
        return strlen($cadena);
    }
    static public function aMayusculas($cadena){
        return strtoupper($cadena);
    }
    static public function aMinusculas($cadena){
        return strtolower($cadena);
    }
}

echo Cadena::numCaracteres("Hola");
echo Cadena::aMayusculas("Hola");
echo Cadena::aMinusculas("Hola");