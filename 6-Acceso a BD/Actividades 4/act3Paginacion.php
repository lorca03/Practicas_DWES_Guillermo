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
    include('conexionPDO.php');
    $tamañopaginas = 1;
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
                    <?php
                    if (isset($_POST['buscar'])) {
                        $titulo = "%".$_POST['titulo']."%";
                        $consulta2 =   "SELECT * FROM hoja1 WHERE Nombre_libro LIKE :titulo ";
                        $resultado2 = $conexion->prepare($consulta2);
                        $resultado2->execute(array(":titulo"=>intval($titulo)));
                        ?>
                        <h6>Libros del usuario <?= $usuario ?></h6>
                        <?php
                        while ($fila = $resultado2->fetch(PDO::FETCH_NUM)) {
                    ?>
                            <hr>
                            <div class="row">


                                    <div class="col"><?= $fila[0] ?></div>
                            </div>
                    <?php
                        }
                        $resultado2->closeCursor();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>



</body>

</html>