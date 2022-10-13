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
    $productos = array(
        "producto1" => array("nombre" => "Camiseta 1", "precio" =>
        "30€", "imagen" => "./imagenes/cami1.jfif"),
        "producto2" => array("nombre" => "Camiseta 2", "precio" => "33€", "imagen" => "./imagenes/cami2.jpg"),
        "producto3" => array("nombre" => "Camiseta 3", "precio" => "29€", "imagen" => "./imagenes/cami3.webp"),
        "producto4" => array("nombre" => "Camiseta 4", "precio" => "60€", "imagen" => "./imagenes/cami4.webp")
    );

    ?>

    <div class="container">
        <div class="abs-center">
            <div class="container">
                <div class="row border">
                    <div class="col-9">
                        <div class="row">
                            <?php
                            foreach ($productos as $producto => $elemento) {
                            ?>
                                <div class="col-3">
                                    <div class="card">
                                        <img src="<?= $elemento['imagen'] ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $elemento['nombre'] ?></h5>
                                            <h6 class="card-title"><?= $elemento['precio'] ?></h6>
                                            <form method="post">
                                                <input type="submit" name="añadir" value="Añadir a la Cesta">
                                                <input type="text" name="producto" value="<?= $producto ?>" hidden>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <?php
                    $_SESSION['cesta'] = array(
                        "producto1" => 0,
                        "producto2" => 0,
                        "producto3" => 0,
                        "producto4" => 0
                    );
                    $accion = !empty($_POST['añadir']) ? $_POST['añadir'] : null;
                    $producto = !empty($_POST['producto']) ? $_POST['producto'] : null;
                    if ($accion == 'Añadir a la Cesta') {
                        $_SESSION['cesta'][$producto]++;
                    }

                    ?>
                    <div class="col-3 border " id="cesta">
                        <h1>Cesta</h1>
                        <ul>
                            <?php
                            foreach ($_SESSION['cesta'] as $key=>$cantidad) {
                                //if ($producto > 0) {
                            ?>
                                    <li><?= $cantidad ?></li>
                            <?php
                            //}
                            } ?>

                        </ul>
                        <h6>Total: 60€</h6>
                        <input class="btn" style="background-color: white;" type="reset" value="Eliminar Productos">

                        </ul>
                    </div>


                </div>

            </div>

        </div>
    </div>


</body>

</html>