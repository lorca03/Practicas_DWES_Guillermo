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
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
    $palos = ["copas", "bastos", "espadas", "oros"];
    $puntos = 0;
    $cartas = "";
    $cartasarray = ["", "", "", "", ""];

    if (isset($_POST["tirar"])) {
        // $puntos = $_POST["puntos"];
        for ($i = 0; $i < 5;) {
            $palo = $palos[array_rand($palos)];
            $numero = $numeros[array_rand($numeros)];
            $carta = $numero . " de " . $palo;
            if (!in_array($carta, $cartasarray)) {
                switch ($numero) {
                    case 1:
                        $puntos += 11;
                        break;
                    case 10:
                        $puntos += 3;
                        break;
                    case 11:
                        $puntos += 2;
                        break;
                    case 12:
                        $puntos += 4;
                        break;
                    case 3:
                        $puntos += 10;
                        break;
                }
                $cartas = $cartas . $carta . "\n";
                $cartasarray[$i] = $carta;
                $i++;
            }
        }
    }

    ?>


    <div class="container">
        <div class="abs-center">
            <form method="post" class="border p-3 form">
                <legend>Cartas</legend>
                <div class="container">
                    <div class="form-group row">
                        <div class="col">
                            <textarea id="w3review" disabled name="w3review" rows="5" cols="40"><?php if (isset($cartas)) {
                                        echo $cartas;
                                    } ?>                                                                      
                            </textarea>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col">
                            <label for="">Puntos</label>
                            <input type="number" disabled name="puntos" class="form-control" value="<?php if (isset($puntos)) {
                                                                                                        echo $puntos;
                                                                                                    } ?>" />
                        </div>
                        <div class="col">
                            <br>
                            <button type="submit" name="tirar" class="btn btn-primary col">Tirar</button>
                        </div>
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
</body>

</html>