<?php
    class Menu
    {
        public $enlaces = [];
        public $titulos = [];
        public $orientacion = "";
        public function leerOrientacion($orientacion)
        {
            if ($orientacion == "horizontal") {
                $this->mostrarHorizontal();
            } else {
                if ($orientacion == "vertical") {
                    $this->mostrarVertical();
                }
            }
        }
        public function cargarOpciones($enlace, $titulo)
        {
            $this->enlaces[] = $enlace;
            $this->titulos[] = $titulo;
           
        }
        public function mostrarHorizontal()
        {
            for ($i = 0; $i < count($this->enlaces); $i++) {
                echo "<a href=" . $this->enlaces[$i].">" .$this->titulos[$i] ."</a> \n";
            }
        }
        public function mostrarVertical()
        {
            for ($i = 0; $i < count($this->enlaces); $i++) {
                echo "<a href=" . $this->enlaces[$i].">" .$this->titulos[$i] ."</a> \n";
                echo "<br>";
            }
        }
    }
    $menu = new Menu();
    $menu->cargarOpciones("https://www.marca.com/","marca");
    $menu->cargarOpciones("https://www.marca.com/","marca2");
    $menu->leerOrientacion("vertical");
    ?>