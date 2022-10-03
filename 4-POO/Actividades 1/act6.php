<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <?php
    class Menu
    {
        public $enlaces = [];
        public $titulos = [];
        public $orientacion = "";
        public $cont = 0;
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
            $this->enalce[$this->cont] = $enlace;
            $this->titulos[$this->cont] = $titulo;
            $this->cont++;
        }
        public function mostrarHorizontal()
        {
            for ($i = 0; $i < count($this->menu); $i++) {
                echo "<a href='$this->enlaces[$i]'>$this->titulos[$i]</a>";
            }
        }
        public function mostrarVertical()
        {
            for ($i = 0; $i < count($this->menu); $i++) {
                echo "<a href='$this->enlaces[$i]'>$this->titulos[$i]</a>";
                echo "<br>";
            }
        }
    }
    $menu = new Menu();
    if (isset($_POST["enviar"])) {
        $titulo=$_POST["titulo[]"];
        $enlace=$_POST["enlace[]"];
        $menu->cargarOpciones($titulo, $enlace);
        $orientacion = $_POST["orientacion"];
        $menu->leerOrientacion($orientacion);
    }
    ?>
    <div class="container">
        <div class="abs-center">
            <form method="post" class="border p-3 form">
                <div class="container">
                    <div class="form-group row">
                        <label for="Ecuacion">Orientacion</label>
                        <input type="text" name="orientacion" value="<?php if (isset($orientacion)) {
                                                                                echo $oreintacion;
                                                                            } ?>" class="form-control" />
                        <label for="Ecuacion">Enlaces</label>
                        <input type="text" hidden name="enlace[]" value="<?php if (isset($enlace)) {
                                                                                echo $enlace;
                                                                            } ?>" class="form-control" />
                        <input type="text" name="enlace" class="form-control" />
                        <label for="Ecuacion">Titulo</label>
                        <input type="text" hidden name="titulo[]" value="<?php if (isset($titulo)) {
                                                                                echo $titulo;
                                                                            } ?>" class="form-control" />
                        <input type="text" name="titulo" class="form-control" />
                    </div>
                </div>
                <br>
                <button type="submit" name="enviar" class="btn btn-primary col">Enviar</button>

            </form>
        </div>
    </div>

</body>

</html>