<?php
class Animal
{
    public $sexo;

    public function __construct($sexo)
    {
        $this->sexo = $sexo;
    }

    public function getSexo()
    {
        return $this->sexo;
    }
    public function come($comida)
    {
        return $comida != null ? "Que rico esta " . $comida : "Hoy no como";
    }
    public function duerme()
    {
        return "Estoy durmiendo";
    }
}
class Ave extends Animal
{
    public function asearse()
    {
        return "Me estoy aseando";
    }
    public function vuela()
    {
        return "Estoy volando";
    }
    public function ponHuevo()
    {
        if ($this->sexo == "hembra") {
            return "Estoy poniendo un huevo";
        } else {
            return "No puedo poner huevos";
        }
    }
}
class Mamifero extends Animal
{
    public function amamanta()
    {
        if ($this->sexo == "hembra") {
            return "Estoy amamantando";
        } else {
            return "No puedo amamantar";
        }
    }
    public function cuidaCrias()
    {
        return "Estoy cuidando ha mis crias";
    }
    public function anda()
    {
        return "Estoy andando";
    }
}
class Canario extends Ave
{
    public $color;
    public function __construct($color,$sexo)
    {
        parent::__construct($sexo);
        $this->color = $color;
    }
    public function canta()
    {
        return "Estoy cantando";
    }
    public function pia()
    {
        return "Estoy piando";
    }
    public function caza()
    {
        return "Estoy cazando";
    }
}
class Gato extends Mamifero
{
    public $raza;
    public function __construct($raza)
    {
        $this->raza = $raza;
    }
    public function come($comida)
    {
        if ($comida == "pescado") {
            return "Estoy comiendo";
        } else {
            return "Dame pescado";
        }
    }
    public function caza()
    {
        return "Estoy cazando";
    }
    public function maulla()
    {
        return "Miauuuuu!";
    }
}
