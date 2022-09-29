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
    $nums1 = "";
    $nums2 = "";
    if (isset($_GET["enviar"])) {
        for ($i = 0; $i < 30; $i++) {
            $nums1 .= rand(0, 100) . "/";
            $nums2 .= rand(0, 100) . "/";
        }
        $array1 = explode("/", $nums1);
        $array2 = explode("/", $nums2);
        switch (array_sum($array1)/count($array1) <=> array_sum($array2)/count($array2)) {
            case 1:
                $arrayMayor = "La media del 1 es mayor";
                break;
            case 0:
                $arrayMayor = "Tienen la misma media";
                break;
            case -1:
                $arrayMayor = "La media del 2 es mayor";
                break;
        }
    }

    ?>


    <div class="container">
        <div class="abs-center">
            <form method="get" class="border p-3 form">

                <div class="container">
                    <div class="form-group row">
                        <label for="Ecuacion">Array 1</label>
                        <textarea disabled name="array1" cols="30" rows="3">
                        <?php if (isset($nums1)) {
                            echo $nums1;
                        } ?>
                        </textarea>
                        <label for="Ecuacion">Array 2</label>
                        <textarea disabled name="array2" cols="30" rows="3">
                        <?php if (isset($nums2)) {
                            echo $nums2;
                        } ?>
                        </textarea>
                    </div>
                    <div class="row">
                        <label for="">Array con mayor media aritmetica</label>
                        <input type="text" disabled name="arrayMAYOR" value="<?php if (isset($arrayMayor)) {
                                                                                    echo $arrayMayor;
                                                                                } ?>">
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