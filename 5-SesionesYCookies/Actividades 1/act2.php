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
    if (@$_SESSION['sumador'] <= 3000) {
        @$_SESSION['sumador'] += $num;
        @$_SESSION['contador']++;
    ?>
        <div class="container">
            <div class="abs-center">
                <form method="post" action="#" class="border p-3 form">
                    <div class="container">
                        <div class="form-group row">
                            <label for="Ecuacion">Numero : <input style="background:transparent ; color: blue;" disabled type="text" value="<?php if (isset($_SESSION['sumador'])) {
                                                                                                                                                echo $_SESSION['sumador'];
                                                                                                                                            } ?>"></label>
                            <input type="number" class="form-control col" min="0" step="0.01" name="num">
                        </div>
                    </div>
                    <br>
                    <div class=" row ">
                        <button type="submit" name="añadir" class="btn btn-primary col">Añadir</button>
                    </div>

                </form>
            </div>
        </div>
    <?php
    } else {
        echo 'La cantidad total es ' . $_SESSION['sumador'];
        echo ' La cantidad de numeros introducidos es ' . $_SESSION['contador'];
        $_SESSION['sumador'] = 0;
        $_SESSION['contador'] = 0;
        session_destroy();
        header("refresh:5,url=./act2.php");
    }




    ?>


</body>

</html>