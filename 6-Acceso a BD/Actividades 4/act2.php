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

    ?>
    <div class="container">
        <div class="abs-center">
            <div class="container">
                <div class="row border" id="cuadrado">
                    <form method="post" class="form">
                        <div class="form-group row" id="buscador">
                            <div class="col">
                                <label for="Ecuacion">Usuarios</label>
                                <select class="form-select" name="usuario" aria-label="Default select example">
                                    <option value="" selected>Elige un usuario</option>
                                    <?php
                                    $consulta = "SELECT * FROM usuarios";
                                    $resultado = $conexion->prepare($consulta);
                                    $resultado->execute();
                                    while ($fila = $resultado->fetch(PDO::FETCH_BOTH)) {

                                    ?>
                                        <option value="<?= $fila[0]; ?>"><?= $fila[1]; ?></option>
                                    <?php
                                    }
                                    $resultado->closeCursor();
                                    ?>
                                </select>
                            </div>
                            <div class="col" id="buscar">
                                <button type="submit" name="mostrar" class="btn btn-primary ">Mostrar Libros</button>
                            </div>
                    </form>
                    <?php
                    if (isset($_POST['mostrar'])) {
                        $usuario = $_POST['usuario'];
                        $consulta2 =   "SELECT DISTINCT libros.Nombre_libro
                                        FROM libros,prestamos 
                                        WHERE libros.Cod_libro=prestamos.Cod_libro 
                                        AND prestamos.Cod_usuario=:usuario;";
                        $resultado2 = $conexion->prepare($consulta2);
                        $resultado2->execute(array(":usuario"=>intval($usuario)));
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