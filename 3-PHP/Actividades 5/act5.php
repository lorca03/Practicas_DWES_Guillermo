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
    $valencia = [
        "Capital" => "Valencia",
        "Plato" => "Paella",
        "Fiesta" => "Fallas"
    ];
    $andalucia = [
        "Capital" => "Sevilla",
        "Plato" => "Gazpacho",
        "Fiesta" => "Feria"
    ];
    $asturias = [
        "Capital" => "Asturias",
        "Plato" => "Fabada",
        "Fiesta" => "Descenso del Sella"
    ];
    $comunidades = [$valencia, $andalucia, $asturias];
    $info = "";
    $comunidad = "";
    if (isset($_POST["enviar"])) {
        $comunidad = $_POST["comunidad"];
        switch ($comunidad) {
            case 'valencia':
                $info = implode("/", $comunidades[0]);
                break;
            case 'andalucia':
                $info = implode("/", $comunidades[1]);
                break;
            case 'asturias':
                $info = implode("/", $comunidades[2]);
                break;
        }
    }

    ?>


    <div class="container">
        <div class="abs-center">
            <form method="post" class="border p-3 form">
                <div class="container">
                    <input type="hidden" name="comunidad" value="0" checked>
                    <input type="radio" name="comunidad" value="valencia">
                    <label for="html">Valencia</label><br>
                    <input type="radio" name="comunidad" value="andalucia">
                    <label for="css">Andalucia</label><br>
                    <input type="radio" name="comunidad" value="asturias">
                    <label for="javascript">Asturias</label>
                </div>
                <br>
                <div class="container">
                    <div class="form-group row">
                        <label for="Ecuacion">Informacion</label>
                        <input type="text" disabled name="info" value="<?php if (isset($info)) {
                                                                    echo $info;
                                                                } ?>">
                    </div>
                </div>
                <br>
                <div class=" row ">
                    <button type="submit" name="enviar" class="btn btn-primary col">Informarse</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>