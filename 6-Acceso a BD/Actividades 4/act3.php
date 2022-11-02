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


    $enlace = mysqli_connect("localhost", "guille", "guille", "libros");
    mysqli_set_charset($enlace, "UTF8");
    if (mysqli_connect_errno()) {
        throw new Exception('La conexion ha fallado');
    }
    $tamañopaginas=1;
    ?>
    <div class="container">
        <div class="abs-center">
            <div class="container">
                <div class="row border">
                    <form method="post" action="#" class=" p-3 form">
                        <div class="form-group row">
                            <label for="Ecuacion">Titulos Normal</label>
                            <input type="text" class="form-control col" name="titulo">
                            <button type="submit" name="buscar" class="btn btn-primary col">Buscar</button>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['buscar'])) {
                        $titulo = $_POST['titulo'];
                        if ($resultado = mysqli_query($enlace, "SELECT * FROM hoja1 WHERE Nombre_libro LIKE '%$titulo%' ")) {
                            while ($fila = mysqli_fetch_row($resultado)) {
                    ?>
                                <hr>
                                <div class="row">
                                    <?php
                                    foreach ($fila as $col) {
                                    ?>

                                        <div class="col"><?= $col ?></div>

                                    <?php
                                    }
                                    ?>
                                </div>
                    <?php
                            }
                            mysqli_free_result($resultado);
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>



</body>

</html>