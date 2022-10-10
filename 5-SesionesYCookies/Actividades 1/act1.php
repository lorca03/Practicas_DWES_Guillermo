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
    session_start();
    $num =  !empty($_POST['num']) ? $_POST['num'] : null;
    if (isset($_POST['media'])) {
        echo 'La media es '.$_SESSION['numeros'] / ($_SESSION['contador'] - 1);
        @$_SESSION['contador']--;
        header("refresh:3,url=./act1.php");
    } else {
        if (isset($_POST['restart'])) {
            @$_SESSION['numeros'] = 0;
            @$_SESSION['contador'] = 0;
            session_destroy();
            header("refresh:0,url=./act1.php");
        } else {
            if (!isset($num) || isset($_POST['añadir'])) {

                @$_SESSION['numeros'] += $num;
                @$_SESSION['contador']++;

                echo $_SESSION['numeros'] . '<br>';
                echo $_SESSION['contador'] - 1 . '<br>';

    ?>
                <div class="container">
                    <div class="abs-center">
                        <form method="post" action="#" class="border p-3 form">
                            <div class="container">
                                <div class="form-group row">
                                    <label for="Ecuacion">Numero</label>
                                    <input type="number" class="form-control col" min="0" step="0.01" name="num">
                                </div>
                            </div>
                            <br>
                            <div class=" row ">
                                <button type="submit" name="añadir" class="btn btn-primary col">Añadir</button>
                                <button type="submit" name="media" class="btn btn-primary col">Media</button>
                                <button type="submit" name="restart" class="btn btn-primary col">Restart</button>
                            </div>

                        </form>
                    </div>
                </div>

    <?php
            }
        }
    }



    ?>

</body>

</html>