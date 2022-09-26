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
    $numerosOrdenados="";
    $cont = 0;
    $numero = 0;
    $numeros = [];
    if (isset($_GET["enviar"])) {
        $numero = $_GET["numero"];
        $cont = $_GET["cont"];
        if ($cont == 4) {
            array_push($numeros, $numero);
            asort($numeros);
            foreach ($numeros as $key => $num) {
                $numerosOrdenados =$numerosOrdenados . $num . "/";
            }
            //echo $numerosOrdenados;
            $cont = 0;
        } else {
            array_push($numeros, $numero);
            $cont++;
        }
    }
    if (isset($_POST["reset"])) {
        $numerosOrdenados = "";
        $cont = 0;
        $numero = 0;
        $numeros = [];
    }
    ?>


    <div class="container">
        <div class="abs-center">
            <form method="get" class="border p-3 form">

                <div class="container">
                    <div class="form-group row">
                        <label for="Ecuacion">Numero</label>
                        <input type="text" name="cont" value="<?php echo $cont; ?>" />
                        <input type="number" name="numero" class="form-control" />
                        <label for="Ecuacion">Numeros Ordenados</label>
                        <input type="text" disabled name="numerosOrdenados" class="form-control" value="<?php if ($numerosOrdenados!="") {
                                                                                                    echo $numerosOrdenados;
                                                                                                } ?>" />
                    </div>
                </div>
                <br>
                <div class=" row ">
                    <button type="submit" name="enviar" class="btn btn-primary col">Enviar</button>
                    <button type="reset" name="reset" class="btn btn-primary col">Reset</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>