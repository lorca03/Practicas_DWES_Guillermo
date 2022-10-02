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
    class Menu
    {


        public function mostrar($direccion)
        {
            if ($direccion == "horizontal") {
                $this->horizontal();
            } else {
                if ($direccion == "vertical") {
                    $this->vertical();
                }
            }
        }
        public function horizontal()
        {
        }
        public function vertical()
        {
        }
    }
    ?>
    <div class="container">
        <div class="abs-center">
            <form method="post" class="border p-3 form">
                <div class="container">
                    <div class="form-group row">
                        <label for="Ecuacion">Orientacion</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="horizontal">Horizontal</option>
                            <option value="vertical">Verical</option>
                        </select>
                        <label for="Ecuacion">Enlaces</label>
                        <input type="text" name="palabra" class="form-control" />
                    </div>
                </div>
                <br>
                <button type="submit" name="enviar" class="btn btn-primary col">Enviar</button>

            </form>
        </div>
    </div>

</body>

</html>