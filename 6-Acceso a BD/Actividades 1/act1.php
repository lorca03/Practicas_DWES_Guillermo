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

    try {
        $enlace = mysqli_connect("localhost", "Guille", "guille", "usuarioss");
        if (mysqli_connect_errno()) {
            throw new Exception('La conexion ha fallado');
        }
    ?>
        <div class="container">
            <div class="abs-center">
                <div class="container">
                    <div class="row border">
                        <?php
                        if ($resultado = mysqli_query($enlace, "SELECT * FROM datosusuarios")) {
                            while ($fila = mysqli_fetch_row($resultado)) {
                        ?>
                                <hr>
                                <div class="row">
                                    <?php
                                    foreach ($fila as $key => $value) {
                                    ?>

                                        <div class="col"><?= $value ?></div>

                                    <?php
                                    }
                                    ?>
                                </div>
                        <?php
                            }
                            mysqli_free_result($resultado);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }


    ?>


</body>

</html>