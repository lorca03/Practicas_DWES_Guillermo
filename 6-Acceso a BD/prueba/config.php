<?php
return [
    'database' => [
        'name' => 'libros',
        'username' => 'Guille',
        'password' => 'guille',
        'connection' => 'mysql:host=localhost',
        'opciones' => [ PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_PERSISTENT => true]
                ]
];