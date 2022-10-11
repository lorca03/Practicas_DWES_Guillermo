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


    $color = !empty($_POST['color']) ? $_POST['color']  : null;
    if (isset($_POST['selecciona'])) {
        $_COOKIE['color'];
        setcookie('color', $color, time() + (31536000));
        echo "<body style='background-color:" . $_COOKIE['color'] . " ;'>";
       // header('Location:act1.php');
    }



    ?>
    <div class="container">
        <div class="abs-center">
            <form method="post" class="border p-3 form">

                <div class=" row ">
                    <div class="col"><input type="color" name="color">Selecciona</input></div>
                    <div class="col"><input type="submit" name="selecciona" class="btn btn-primary col"></div>
                </div>

            </form>
        </div>
    </div>


</body>

</html>