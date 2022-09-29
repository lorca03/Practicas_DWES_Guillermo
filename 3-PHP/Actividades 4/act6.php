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
    $ingles = ["ball", "good", "car", "house", "bike"];
    $español = ["pelota", "bien", "coche", "casa", "bici"];
    $resultado = "";
    $palabra1 = "";
    $palabra2 = "";

    if (isset($_POST["enviar"]) && isset($_POST["palabra1"]) && isset($_POST["palabra2"])) {
        $palabra1 = $_POST["palabra1"];
        $palabra2 = $_POST["palabra2"];
        $index1 = array_search($palabra1, $ingles);
        if (is_bool($index1)) {
            $index1 = array_search($palabra1, $español);
        }
        $index2 = array_search($palabra2, $ingles);
        if (is_bool($index2)) {
            $index2 = array_search($palabra2, $español);
        }
        if (is_bool($index1) || is_bool($index2)) {
            $resultado = "Incorrecto";
        } else {
            if ($index1 == $index2) {
                $resultado = "Correcto";
            } else {
                $resultado = "Incorrecto";
            }
        }

    } else {
        echo "<script>alert('Tienes que escribir dos palabras');</script>";
    }

    ?>


    <div class="container">
        <div class="abs-center">
            <form method="post" class="border p-3 form">
                <legend>Escribe dos palabras</legend>
                <div class="container">
                    <div class="form-group row">
                        <input type="text" name="palabra1" class="form-control" />
                    </div>
                    <br>
                    <div class="form-group row">
                        <input type="text" name="palabra2" class="form-control" />
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-3">
                        <button type="submit" name="enviar" class="btn btn-primary col">Comprobar</button>
                    </div>
                    <div class="col-9">
                        <input type="text" disabled name="palabra" class="form-control" value="<?php if (isset($resultado)) {
                                                                                                        echo $resultado;
                                                                                                    } ?>" />
                    </div>



                </div>


            </form>
        </div>
    </div>
</body>

</html>