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

        if ($creditos > 10) {
            $creditos -= 10;
            $num1 = rand(0, 9);
            $num2 = rand(0, 9);
            $num3 = rand(0, 9);
            $nums = [$num1, $num2, $num3];
            $cont = 0;
            foreach ($nums as $key => $num) {
                if ($num == 5) {
                    $cont++;
                }
            }

            switch ($cont) {
                case 1:
                    $creditos += 5;
                    break;
                case 2:
                    $creditos += 25;
                    break;
                case 3:
                    $creditos += 100;
                    break;
            }
            $cont = 0;
        } else {
            echo "No puedes jugar";
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
                    <input type="number" disabled name="num2" class="form-control col" value="<?php if (isset($num1)) {
                                                                                                    echo $num2;
                                                                                                } ?>" />
                    <input type="number" disabled name="num3" class="form-control col" value="<?php if (isset($num1)) {
                                                                                                    echo $num3;
                                                                                                } ?>" />
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