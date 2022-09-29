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
    $numerosOrdenados = "";
    $cont = 0;
    $numero = 0;
     $numeros = "";
    if (isset($_POST["reset"])) {
        $numerosOrdenados = "";
        $cont = 0;
        $numero = 0;
        $numeros = "";
    }
    function cincuenta($array){
        return $array*0.5;
    }
    if (isset($_POST["enviar"])) {
        $numero = $_POST["numero"];
        $numeros = $_POST["numeros"];
        $cont = $_POST["cont"];
        if ($cont == 4) {
            $numeros .= $numero;
            $array = explode(" ", $numeros);
            asort($array);
            $array=array_map("cincuenta",$array);
            foreach ($array as $key => $num) {
                $numerosOrdenados = $numerosOrdenados . $num . "/";
            }
            $numeros = "";
            $cont = 0;
        } else {
            $numeros .= $numero . " ";
            $cont++;
        }
   }

    ?>


    <div class="container">
        <div class="abs-center">
            <form method="post" class="border p-3 form">

                <div class="container">
                    <div class="form-group row">
                        <label for="Ecuacion">Numero</label>
                        <input type="hidden" name="cont" value="<?php echo $cont; ?>" />
                        <input type="hidden" name="numeros" value="<?php echo $numeros; ?>" />
                        <input type="number" name="numero" class="form-control" />
                        <label for="Ecuacion">Numeros Ordenados y Divididos</label>
                        <input type="text" disabled name="numerosOrdenados" class="form-control" value="<?php if (isset($numerosOrdenados)) {
                                                                                                            echo $numerosOrdenados;
                                                                                                        } ?>" />
                    </div>
                </div>
                <br>
                <div class=" row ">
                    <button type="submit" name="enviar" class="btn btn-primary col">Enviar</button>
                    <button type="submit" name="reset" class="btn btn-primary col">Reset</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>