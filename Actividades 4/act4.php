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
    $ingles=["Ball","Good","Car","House","Bike"];
    $español=["Pelota","Bien","Coche","Casa","Bici"];

    if (isset($_POST["enviar"])) {
       


    }
    ?>


    <div class="container">
        <div class="abs-center">
            <form method="post" class="border p-3 form">

                <div class="container">
                    <div class="form-group row">
                        <label for="Ecuacion">Diccionario</label>
                        <input type="text" disabled name="pregunta" class="form-control" value="<?php if (isset($pregunta1)) {
                                                                                                    echo $pregunta1;
                                                                                                } ?>" />
                    </div>
                    <br>
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
                </div>

            </form>
        </div>
    </div>
</body>

</html>