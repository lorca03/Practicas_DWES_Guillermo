<!DOCTYPE html>
<html lang="en">

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
    if (isset($_GET["error"])) {
        $error = $_GET["error"];
        switch ($error) {
            case 'error-nombre':
                $error = "El nombre no es correcto";
                break;
            case 'error-edad':
                $error = "La edad no es correcta";
                break;
            case 'error-email':
                $error = "El email no es correcto";
                break;
            case 'error-contra':
                $error = "La contraseña no es correcto";
                break;
            case 'error_faltandatos':
                $error = "Faltan datos";
                break;
        }
    }
    ?>

    <div class="container">
        <div class="abs-center">
            <form method="post" action="act1validar.php" class="border p-3 form">
                <h6 name="error">
                    <?php if (isset($error)) {
                        echo $error;
                    } ?>
                </h6>
                <div class="container">
                    <div class="form-group row">
                        <label for="Ecuacion">Nombre</label>
                        <input type="text " class="form-control col" name="nombre">
                    </div>
                    <div class="form-group row">
                        <label for="Ecuacion">Edad</label>
                        <input type="text" class="form-control col" name="edad">
                    </div>
                    <div class="form-group row">
                        <label for="Ecuacion">Email</label>
                        <input type="text" class="form-control col" name="email">
                    </div>
                    <div class="form-group row">
                        <label for="Ecuacion">Contraseña</label>
                        <input type="password" class="form-control col" name="contra">
                    </div>
                </div>
                <br>
                <div class=" row ">
                    <button type="submit" name="enviar" class="btn btn-primary col">Enviar</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>