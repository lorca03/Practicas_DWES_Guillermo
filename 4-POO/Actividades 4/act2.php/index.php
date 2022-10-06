<?php
require "autoload.php";

try {
    $peep = new Usuario("pepe");
    if (method_exists($peep,'mostrar()')==false) {
        throw new Exception("Esa clase no exixte");
    } 
} catch (Exception $e) {
    echo $e->getMessage();
}
