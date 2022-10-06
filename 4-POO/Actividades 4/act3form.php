<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
    
    if (isset($_POST["img"])) {
        $_FILES = $_POST["img"];
    }
    ?>

    <div class="container">
        <div class="abs-center">
            <form method="post" enctype="multipart/form-data" action="act3logica.php" class="border p-3 form">
                <div class="container">
                    <div class="form-group row">
                        <label for="Ecuacion">Imagen</label>
                        <input type="file"  class="form-control col" name="img[]" multiple >
                    </div>
                </div>
                <br>
                <div class=" row ">
                    <button type="submit" name="enviar" class="btn btn-primary col">Enviar</button>
                    <button type="submit" name="visualizar" class="btn btn-primary col">Visualizar</button>
                    <button type="submit" name="zip" class="btn btn-primary col">Zip</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>