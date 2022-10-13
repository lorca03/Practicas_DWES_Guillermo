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
    if (!isset($_SESSION['sesion'])) {
        $_SESSION['sesion'] = false;
    }
    if (!$_SESSION['sesion']) {

    ?>
        <div class="container">
            <div class="abs-center">
                <form method="post" class="border p-3 ">
                    <div class="container">
                        <div class="form-group row">
                            <label>Usuario</label>
                            <input type="text" class="form-control col" name="usuario">
                            <label>Paswword</label>
                            <input type="password" class="form-control col" name="contraseña">
                        </div>
                    </div>
                    <br>
                    <div class=" row ">
                        <input type="submit" name="iniciar" value="Iniciar sesion">
                    </div>

                </form>
            </div>
        </div>
        <?php
        $usuario = !empty($_POST['usuario']) ? $_POST['usuario'] : null;
        $contraseña = !empty($_POST['contraseña']) ? $_POST['contraseña'] : null;
        $iniciar = !empty($_POST['iniciar']) ? $_POST['iniciar'] : null;
        if ($iniciar == 'Iniciar sesion') {
            if ($usuario == $contraseña) {
                $_SESSION['sesion'] = true;
                header('Location:act2.php');
            }
        }
    } else {
        $productos = array(
            "producto1" => array("nombre" => "Camiseta 1", "precio" =>
            "30", "imagen" => "./imagenes/cami1.jfif"),
            "producto2" => array("nombre" => "Camiseta 2", "precio" => "33", "imagen" => "./imagenes/cami2.jpg"),
            "producto3" => array("nombre" => "Camiseta 3", "precio" => "29", "imagen" => "./imagenes/cami3.webp"),
            "producto4" => array("nombre" => "Camiseta 4", "precio" => "60", "imagen" => "./imagenes/cami4.webp")
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
                                                <h6 class="card-title"><?= $elemento['precio'] ?>€</h6>
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
                        if (!isset($_SESSION['cesta'])) {
                            $_SESSION['cesta'] = array(
                                "producto1" => 0,
                                "producto2" => 0,
                                "producto3" => 0,
                                "producto4" => 0
                            );
                        }
                        $total = 0;
                        $accion = !empty($_POST['añadir']) ? $_POST['añadir'] : null;
                        $producto = !empty($_POST['producto']) ? $_POST['producto'] : null;
                        if ($accion == 'Añadir a la Cesta') {
                            $_SESSION['cesta'][$producto]++;
                        }
                        $quitar = !empty($_POST['quitar']) ? $_POST['quitar'] : null;
                        $productoElminar = !empty($_POST['productoEliminar']) ? $_POST['productoEliminar'] : null;
                        if ($quitar == 'Quitar') {
                            $_SESSION['cesta'][$productoElminar]--;
                        }
                        $eliminar = !empty($_POST['eliminar']) ? $_POST['eliminar'] : null;
                        if ($eliminar == 'Eliminar Productos') {
                            $_SESSION['cesta'] = array(
                                "producto1" => 0,
                                "producto2" => 0,
                                "producto3" => 0,
                                "producto4" => 0
                            );
                        }
                        ?>
                        <div class="col-3 border " id="cesta">
                            <h1>Cesta</h1>
                            <ul>
                                <?php
                                foreach ($_SESSION['cesta'] as $key => $cantidad) {
                                    if ($cantidad > 0) {
                                ?>
                                        <li>
                                            <div class="row">
                                                <div class="col-7">
                                                    <h5><?= $productos[$key]['nombre'] ?></h5>
                                                </div>
                                                <div class="col-2"><span class="badge rounded-pill" id="cantidadProd2"><?= $cantidad ?></span></div>
                                                <div class="col-2"><?= ($productos[$key]['precio'] * $cantidad) ?>€</div>
                                                <div class="col" id="quitar">
                                                    <form method="post">
                                                        <input type="submit" name="quitar" value="Quitar">
                                                        <input type="text" name="productoEliminar" value="<?= $key ?>" hidden>
                                                    </form>
                                                </div>
                                            </div>

                                        </li>
                                <?php
                                        $total += ($productos[$key]['precio'] * $cantidad);
                                    }
                                }
                                ?>
                            </ul>
                            <h6>Total: <span><?= $total ?></span> €</h6>
                            <form method="post">
                                <input type="submit" name="eliminar" value="Eliminar Productos">
                                <a href="logout.php">Cerrar Sesion</a>
                            </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</body>

</html>