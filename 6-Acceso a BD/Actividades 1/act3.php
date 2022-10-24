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
    if (isset($_POST['introducir'])) {
        $titulo = !empty($_POST['titulo']) ? $_POST['titulo'] : null;
        $editorial = !empty($_POST['editorial']) ? $_POST['editorial'] : null;
        $autor = !empty($_POST['autor']) ? $_POST['autor'] : null;
        $genero = !empty($_POST['genero']) ? $_POST['genero'] : null;
        $pais = !empty($_POST['pais']) ? $_POST['pais'] : null;
        $paginas = !empty($_POST['paginas']) ? $_POST['paginas'] : null;
        $precio = !empty($_POST['precio']) ? $_POST['precio'] : null;
        $año = !empty($_POST['año']) ? $_POST['año'] : null;
        if ($editorial==null) {
            echo 'rgeaygter';
        }
        var_dump( $editorial);
        mysqli_query(
            $enlace,
            "INSERT INTO `hoja1` (NOMBRE_LIBRO,EDITORIAL,AUTOR,GENERO,PAIS,NUM_PAGINAS,PRECIO_LIBRO,AÑO_EDICION)  
        VALUES( $titulo,$editorial,$autor,$genero,$pais,$paginas,$precio,$año) ;"
        );
    }
    ?>
    <div class="container">
        <div class="abs-center">
            <form method="post" action="#" class="border p-3 form">
                <div class="form-group row">
                    <label>Titulo</label>
                    <input type="text" class="form-control col" name="titulo">
                </div>
                <div class="form-group row">
                    <label>Editorial</label>
                    <input type="text" class="form-control col" name="editorial">
                </div>
                <div class="form-group row">
                    <label>Autor</label>
                    <input type="text" class="form-control col" name="autor">
                </div>
                <div class="form-group row">
                    <label>Genero</label>
                    <input type="text" class="form-control col" name="genero">
                </div>
                <div class="form-group row">
                    <label>Pais del autor</label>
                    <input type="text" class="form-control col" name="pais">
                </div>
                <div class="form-group row">
                    <label>Numero de paginas</label>
                    <input type="number" min="1" class="form-control col" name="paginas">
                </div>
                <div class="form-group row">
                    <label>Precio libro</label>
                    <input type="text" class="form-control col" name="precio">
                </div>
                <div class="form-group row">
                    <label>Año edicion</label>
                    <input type="number" class="form-control col" name="año">
                </div>
                <br>
                <button type="submit" name="introducir" class="btn btn-primary col">Introducir</button>

        </div>
        </form>
    </div>
    </div>

</body>

</html>