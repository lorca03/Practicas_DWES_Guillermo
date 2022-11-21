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
    if (!isset($_SESSION['tiempo'])) {
        $_SESSION['tiempo'] = time();
    } else if (time() - $_SESSION['tiempo'] > 1200) {
        session_destroy();
        $_SESSION['sesion'] = false;
        header("Location:crud.php");
    }
    $_SESSION['tiempo'] = time();

    if (!$_SESSION['sesion']) {
        include('sesion/iniciarsesion.php');
    } else {
        require_once 'conexionPDO.php';
        $conexion = Conexion::make();
    ?>
        <div class="container">
            <div class="abs-center">
                <div class="container">
                    <div class="row border" id="cuadrado">
                        <form method="post" action="#" class="form">
                            <div class="form-group row" id="buscador">
                                <div class="col">
                                    <label for="Ecuacion">Titulos</label>
                                    <input type="text" class="form-control " name="titulo">
                                </div>
                                <div class="col" id="buscar">
                                    <button type="submit" name="buscar" class="btn btn-primary ">Buscar</button>
                                </div>
                        </form>
                    </div>
                    <form action="#" method="POST">
                        <button type="submit" name="actualizar" class="btn btn-primary ">Actualiza</button>
                        <?php
                        if (isset($_POST['buscar'])) {
                            $titulo = '%' . $_POST['titulo'] . '%';
                            $consulta = "SELECT * FROM libros WHERE Nombre_libro LIKE :titulo ";
                            $resultado = $conexion->prepare($consulta);
                            $resultado->execute(array(":titulo" => $titulo));
                            $ids = "";
                            while ($fila = $resultado->fetch(PDO::FETCH_NUM)) {
                        ?>
                                <hr>
                                <div class="form-group row">
                                    <?php
                                    $ids .= $fila[0] . ' ';
                                    for ($i = 0; $i < count($fila); $i++) {
                                        if ($i == 0) {
                                    ?>
                                            <input type="text" id="identificador" class="form-control " name="<?= $i . $fila[0] ?>" value="<?= $fila[$i] ?>" disabled>
                                        <?php
                                        } else {
                                        ?>
                                            <input type="text" class="form-control col" name="<?= $i . $fila[0] ?>" value="<?= $fila[$i] ?>">
                                    <?php
                                        }
                                    }
                                    ?>
                                    <input type="submit" class="form-control" name="eliminar" value="<?php echo 'Eliminar' . $fila[0] ?>">
                                </div>
                            <?php
                                //$contador++;
                            }
                            $resultado->closeCursor();
                            ?>
                            <input type="text" name="ids" value="<?php echo $ids ?>" hidden>
                        <?php
                        }
                        ?>
                    </form>
                    <?php
                    if (isset($_POST['eliminar'])) {
                        $idEliminar = !empty($_POST['eliminar']) ? $_POST['eliminar'] : null;
                        $idEliminar = substr($idEliminar, -1);
                        header('Location:eliminar.php?id=' . $idEliminar);
                    }
                    if (isset($_POST['actualizar'])) {
                        $IDS = !empty($_POST['ids']) ? $_POST['ids'] : null;
                        $IDS = explode(' ', $IDS);
                        foreach ($IDS as $key) {
                            $titulo = !empty($_POST['1' . $key]) ? $_POST['1' . $key] : null;
                            $editorial = !empty($_POST['2' . $key]) ? $_POST['2' . $key] : null;
                            $autor = !empty($_POST['3' . $key]) ? $_POST['3' . $key] : null;
                            $genero = !empty($_POST['4' . $key]) ? $_POST['4' . $key] : null;
                            $pais = !empty($_POST['5' . $key]) ? $_POST['5' . $key] : null;
                            $paginas = !empty($_POST['6' . $key]) ? $_POST['6' . $key] : null;
                            $precio = !empty($_POST['7' . $key]) ? $_POST['7' . $key] : null;
                            $ano = !empty($_POST['8' . $key]) ? $_POST['8' . $key] : null;
                            $consulta = "UPDATE libros 
                            SET Nombre_libro=:titulo, 
                            Editorial=:editorial, 
                            Autor=:autor, 
                            Género=:genero, 
                            Pais=:pais,
                            Num_paginas=:paginas,
                            Precio_libro=:precio, 
                            Año_edicion=:ano
                            where cod_libro=:key;";
                            $resultado = $conexion->prepare($consulta);
                            /*$resultado->execute(array(":titulo" => $titulo,":editorial" => $editorial,":autor" => $autor,
                            ":genero" => $genero,":pais" => $pais,":paginas" => $paginas,":precio" => $precio,":ano" => $ano,":key" => $key));*/
                            if ($resultado->execute(array(":titulo" => $titulo,":editorial" => $editorial,":autor" => $autor,
                            ":genero" => $genero,":pais" => $pais,":paginas" => $paginas,":precio" => $precio,":ano" => $ano,":key" => $key))) {
                                if ($key != "") {
                                    echo 'Se ha actualizado el libro ' . $key . " de titulo " . $titulo . "</br>";
                                }
                            }
                        }
                        $resultado->closeCursor();
                    }
                    ?>

                    <form method="post">
                        <a href="sesion/logout.php">Cerrar Sesion</a>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</body>

</html>