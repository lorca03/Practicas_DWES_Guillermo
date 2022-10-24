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
    $contador = 0;
    if (mysqli_connect_errno()) {
        throw new Exception('La conexion ha fallado');
    }
    
    ?>
    <div class="container">
        <div class="abs-center">
            <div class="container">
                <div class="row border" id="cuadrado">
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
                </div>
                <form action="#" method="POST">
                <button type="submit" name="actualizar" class="btn btn-primary ">Actualiza</button>
                    <?php

                    if (isset($_POST['buscar'])) {
                        
                        $titulo = $_POST['titulo'];
                        if ($resultado = mysqli_query($enlace, "SELECT * FROM hoja1 WHERE Nombre_libro LIKE '%$titulo%' ")) {
                            $ids="";
                            while ($fila = mysqli_fetch_row($resultado)) {
                    ?>
                                <hr>

                                <div class="form-group row">
                                    <?php
                                    $ids.=$fila[0].' ';
                                    for ($i = 0; $i < count($fila); $i++) {
                                        
                                        if ($i == 0) {
                                            
                                    ?>
                                            <input type="text" id="identificador" class="form-control col" name="<?= $i.$fila[0] ?>" value="<?= $fila[$i] ?>" disabled>
                                        <?php
                                        } else {
                                        ?>
                                        
                                            <input type="text" class="form-control col" name="<?= $i.$fila[0] ?>" value="<?= $fila[$i] ?>">

                                    <?php
                                        }
                                        
                                    }
                                    
                                    ?>
                                </div>


                    <?php
                                $contador++;
                            }
                            echo $contador;
                            
                            mysqli_free_result($resultado);
                           
                            echo $ids;
                        }
                        echo $ids;
                        ?>
                        <input type="text"  name="ids" value="<?php echo $ids ?>">
                        <?php
                    }
                    ?>
                    
                </form>
                <?php
                if (isset($_POST['actualizar'])) {
                    $IDS=!empty($_POST['ids']) ? $_POST['ids'] : null;
                    $IDS=explode(' ', $IDS);
                    foreach ($IDS as $key ) {
                        $titulo = !empty($_POST['1'.$key]) ? $_POST['1'.$key] : null;
                        $editorial = !empty($_POST['2'.$key]) ? $_POST['2'.$key] : null;
                        $autor = !empty($_POST['3'.$key]) ? $_POST['3'.$key] : null;
                        $genero = !empty($_POST['4'.$key]) ? $_POST['4'.$key] : null;
                        $pais = !empty($_POST['5'.$key]) ? $_POST['5'.$key] : null;
                        $paginas = !empty($_POST['6'.$key]) ? $_POST['6'.$key] : null;
                        $precio = !empty($_POST['7'.$key]) ? $_POST['7'.$key] : null;
                        $año = !empty($_POST['8'.$key]) ? $_POST['8'.$key] : null;
                        if ($resultado = mysqli_query($enlace, "UPDATE hoja1 SET Nombre_libro='$titulo' ,Editorial='$editorial',Autor='$autor' ,Género='$genero' ,Pais='$pais' , Num_paginas='$paginas' ,Precio_libro='$precio' ,Año_edicion='$año' where cod_libro=$key ")) {
                            echo 'Se ha actualizado '.$key;
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    </div>



</body>

</html>