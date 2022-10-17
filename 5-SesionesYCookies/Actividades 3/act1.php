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
    class Poker
    {
        public $dados = [];
        public static $caras = ['As', 'K', 'Q', 'J', '7', '8'];
        public static function tirar()
        {
            for ($i = 0; $i < 5; $i++) {
                $dados[$i] = self::$caras[rand(0, 5)];
            }
            return $dados;
        }
    }
    session_start();
    if (!isset($_SESSION['tiradas'])) {
        $_SESSION['tiradas'] = 0;
    }
    if (isset($_POST["reset"])) {
        $_SESSION['tiradas'] = 0;
    }
    ?>


    <div class="container">
        <div class="abs-center">
            <form method="post" class="border p-3 form">
                <div class="form-group row">
                    <label for="Ecuacion">Caras</label>
                    <?php if (isset($_POST["tirar"])) {
                        $_SESSION['tiradas']++;
                        $dados = Poker::tirar();
                        foreach ($dados as $key) {
                    ?>
                            <input type="text" disabled class="form-control col" value="<?php echo $key ?>" />
                    <?php
                        }
                    }
                    ?>
                </div>
                <br>
                <div class="form-group row ">
                    <button type="submit" name="tirar" class="btn btn-primary col">Tirar</button>
                    <div class="col">
                        <input type="text" disabled name="creditos" class="form-control" value="<?php if (isset($_SESSION['tiradas'])) {
                                                                                                    echo $_SESSION['tiradas'];
                                                                                                } ?>" />

                    </div>
                    <div class="col"><button type="submit" name="reset" class="btn btn-primary col">Resetear</button></div>
                </div>

            </form>
        </div>
    </div>
</body>

</html>