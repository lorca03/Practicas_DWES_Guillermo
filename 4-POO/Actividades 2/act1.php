<?php
class Tabla
{
    public $filas;
    public $columnas;
    public $array;

    public function __construct($filas,$columnas)
    {
        $this->filas=$filas;
        $this->columnas=$columnas;
    }
    public function llenar($fil, $col, $num)
    {
        $this->array[$fil][$col] = $num;
    }
    public function mostrar()
    {
        echo "<table>";
        for ($i = 0; $i < $this->filas ; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $this->columnas; $j++) {
                echo "<td>" . $this->array[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

$tabla = new Tabla(2,2);
$tabla->llenar(0, 0, 0);
$tabla->llenar(0, 1, 1);
$tabla->llenar(1, 0, 2);
$tabla->llenar(1, 1, 3);

$tabla->mostrar();
