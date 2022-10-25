<!DOCTYPE html>
<html lang="es">

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


    $enlace = mysqli_connect("localhost", "Guille", "guille", "libros");
    mysqli_set_charset($enlace, "UTF8");
    if (mysqli_connect_errno()) {
        throw new Exception('La conexion ha fallado');
    }
    ?>
    <div class="container">
        <div class="abs-center">
            <div class="container">
                <div class="row border">
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
                <div class="container-fluid">
                    <?php
                    if (isset($_POST['buscar'])) {
                        $busqueda = '%' . $_POST['titulo'] . '%';
                        $consulta = "SELECT * FROM hoja1 WHERE Nombre_libro LIKE ? ";
                        $resultado = mysqli_prepare($enlace, $consulta);
                        $ok = mysqli_stmt_bind_param($resultado, 's', $busqueda);
                        $validacion = mysqli_stmt_execute($resultado);
                        if ($validacion) {
                            mysqli_stmt_bind_result($resultado, $cod_libro, $nombre_libro, $editorial, $autor, $genero, $pais, $paginas, $precio, $ano);
                            while (mysqli_stmt_fetch($resultado)) {
                    ?>

                                <hr>
                                <div class="row">
                                    <div class="col"><?= $cod_libro ?></div>
                                    <div class="col"><?= $nombre_libro ?></div>
                                    <div class="col"><?= $editorial ?></div>
                                    <div class="col"><?= $autor ?></div>
                                    <div class="col"><?= $genero ?></div>
                                    <div class="col"><?= $pais ?></div>
                                    <div class="col"><?= $paginas ?></div>
                                    <div class="col"><?= $precio ?></div>
                                    <div class="col"><?= $ano ?></div>
                                </div>
                    <?php
                            }
                        } else {
                            echo 'La busqueda ha fallado';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>



</body>

</html>