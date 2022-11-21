<?php
class Conexion{
    public static function make(){ 
        try{
            $config= require 'config.php';
            $config= $config['database'];
            $conexion = new PDO($config['connection'].';dbname='.$config['name'],
            $config['username'],
            $config['password'],
            $config['opciones']);
        }
        catch (Exception $PDOExcepetion){ 
            throw new Exception('La conexion con la base de datos no se ha podido realizar');
        }
        return $conexion;
    }
}