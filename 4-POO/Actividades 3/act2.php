<?php
class Juegos
{
    public $numero;

    public function __construct()
    {
        $this->numero = rand(1, 5);
    }

    public function adivinarNumero($num)
    {
        if ($this->numero == $num) {
            echo "Has acertado\n";
        } else {
            echo "Has fallado\n";
        }
    }
    public function __destruct()
    {
        echo "Destruir";
    }
}

$juego=new Juegos();
$juego->adivinarNumero(2);

