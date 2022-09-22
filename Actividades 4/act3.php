<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
    $aciertos = 0;
    $fallos = 0;
    $pregunta1 = "Cuantos colores tiene la bandera de españa?";
    $pregunta2 = "Quien es el presidente de E.E.U.U.?";
    $pregunta3 = "Cunatos paises hay en la UNion Europea?";
    $opcion1 ="";
    if (isset($_POST["enviar"])) {
        $opcion1 = $_POST["opcion1"];
        echo $opcion1;
        $opcion2 = $_POST["opcion2"];
        $opcion3 = $_POST["opcion3"];
        if ($opcion1=="2") {
            $aciertos++;
        }else {
            $fallos++;
        }
        if ($opcion2=="Joe Biden") {
            $aciertos++;
        }else {
            $fallos++;
        }
        if ($opcion3=="27") {
            $aciertos++;
        }else {
            $fallos++;
        }


    }
    ?>


    <div class="container">
        <div class="abs-center">
            <form method="post" class="border p-3 form">

                <div class="container">
                    <div class="form-group row">
                        <label for="Ecuacion">Pregunta 1</label>
                        <input type="text" disabled name="pregunta" class="form-control" value="<?php if (isset($pregunta1)) {
                                                                                                    echo $pregunta1;
                                                                                                } ?>" />
                    </div>
                    <br>
                    <input type="radio" name="opcion1" value="1">
                    <label for="html">1</label><br>
                    <input type="radio" name="opcion1" value="2">
                    <label for="css">2</label><br>
                    <input type="radio" name="opcion1" value="3">
                    <label for="javascript">3</label>
                </div>
                 <br>                                                                               
                <div class="container">
                    <div class="form-group row">
                        <label for="Ecuacion">Pregunta 2</label>
                        <input type="text" disabled name="pregunta" class="form-control" value="<?php if (isset($pregunta2)) {
                                                                                                    echo $pregunta2;
                                                                                                } ?>" />
                    </div>
                    <br>
                    <input type="radio" name="opcion2" value="Joe Biden">
                    <label for="html">Joe Biden</label><br>
                    <input type="radio" name="opcion2" value="Donald Trump">
                    <label for="css">Donald Trump</label><br>
                    <input type="radio" name="opcion2" value="George Washington">
                    <label for="javascript">George Washington</label>
                </div>
                   <br>                                                                             
                <div class="container">
                    <div class="form-group row">
                        <label for="Ecuacion">Pregunta 3</label>
                        <input type="text" disabled name="pregunta" class="form-control" value="<?php if (isset($pregunta3)) {
                                                                                                    echo $pregunta3;
                                                                                                } ?>" />
                    </div>
                    <br>
                    <input type="radio" name="opcion3" value="29">
                    <label for="html">29</label><br>
                    <input type="radio" name="opcion3" value="26">
                    <label for="css">26</label><br>
                    <input type="radio" name="opcion3" value="27">
                    <label for="javascript">27</label>
                </div>
                   <br>                                                                             
                                                                                            





                <div class="form-group row ">
                    <button type="submit" name="enviar" class="btn btn-primary col">Tirar</button>
                    <div class="col">
                        <label for="">Aciertos</label>
                        <input type="text" disabled name="aciertos" class="form-control" value="<?php if (isset($aciertos)) {
                                                                                                    echo $aciertos;
                                                                                                } ?>" />
                    </div>
                    <div class="col">
                        <label for="">Fallos</label>
                        <input type="text" disabled name="fallos" class="form-control" value="<?php if (isset($fallos)) {
                                                                                                    echo $fallos;
                                                                                                } ?>" />
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>

</html>