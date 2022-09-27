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
    $creditos = 100;
    if (isset($_POST["tirar"])) {
        $creditos = $_POST["creditos"];
        $apuesta = $_POST["apuesta"];
        $n = $_POST["n"];
        if ($creditos >= 300) {
            echo "<h2 >Has ganado</h2>";
        } else {
            if ($creditos > 10 && $apuesta != false && $n != false) {

                $num1 = rand(1, 10);
                $num2 = rand(1, 10);
                $num3 = rand(1, 10);
                $num4 = rand(1, 10);
                $num5 = rand(1, 10);
                $nums = [$num1, $num2, $num3, $num4, $num5];
                $cont = 0;


                foreach ($nums as $key => $num) {
                    if ($num == $n) {
                        $cont++;
                    }
                }
                switch ($apuesta) {
                    case '10':
                        $creditos -= 10;
                        if ($cont >= 1) {
                            $creditos += 30;
                        }
                        break;
                    case '20':
                        if ($creditos >= 20) {
                            $creditos -= 20;
                            if ($cont >= 1) {
                                $creditos += 60;
                            }
                        } else {
                            echo "<h4 >No puedes jugar</h4>";
                        }
                        break;
                    case '50':
                        if ($creditos >= 50) {
                            $creditos -= 50;
                            if ($cont >= 1) {
                                $creditos += 150;
                            }
                        } else {
                            echo "<h4 >No puedes jugar</h4>";
                        }
                        break;
                }
                $cont = 0;
            } else {
                echo "<h4 >No puedes jugar</h4>";
            }
        }
    }
    ?>


    <div class="container">
        <div class="abs-center">
            <form method="post" class="border p-3 form">
                <div class="form-group row">
                    <label for="Ecuacion">Numeros</label>
                    <input type="hidden" name="creditos" value="<?php echo $creditos; ?>" />
                    <input type="number" disabled name="num1" class="form-control col" value="<?php if (isset($num1)) {
                                                                                                    echo $num1;
                                                                                                } ?>" />
                    <input type="number" disabled name="num2" class="form-control col" value="<?php if (isset($num2)) {
                                                                                                    echo $num2;
                                                                                                } ?>" />
                    <input type="number" disabled name="num3" class="form-control col" value="<?php if (isset($num3)) {
                                                                                                    echo $num3;
                                                                                                } ?>" />
                    <input type="number" disabled name="num4" class="form-control col" value="<?php if (isset($num4)) {
                                                                                                    echo $num4;
                                                                                                } ?>" />
                    <input type="number" disabled name="num5" class="form-control col" value="<?php if (isset($num5)) {
                                                                                                    echo $num5;
                                                                                                } ?>" />
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="container">
                            <input type="hidden" name="apuesta" value="0" checked>
                            <input type="radio" name="apuesta" value="10">
                            <label for="html">10</label><br>
                            <input type="radio" name="apuesta" value="20">
                            <label for="css">20</label><br>
                            <input type="radio" name="apuesta" value="50">
                            <label for="javascript">50</label>
                        </div>
                    </div>
                    <div class="col">
                        <label for="">Introduce un numero</label>
                        <input type="number" name="n" class="form-control col" />
                    </div>
                </div>

                <br>
                <div class="form-group row ">
                    <button type="submit" name="tirar" class="btn btn-primary col">Tirar</button>
                    <div class="col">
                        <input type="text" disabled name="creditos" class="form-control" value="<?php if (isset($creditos)) {
                                                                                                    echo $creditos;
                                                                                                } ?>" />
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>

</html>