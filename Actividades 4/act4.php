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
    $ingles=["ball","good","car","house","bike"];
    $español=["pelota","bien","coche","casa","bici"];
    $traduccion="";
    $palabra="";
    if (isset($_POST["enviar"])&& isset($_POST["palabra"])) {
       $palabra="pelota"/*$_POST["palabra"]*/;
       if (in_array(strtolower($palabra),$ingles) ) {
        
       }else {
        if (in_array(strtolower($palabra),$español) ) {
            
        }else {
            echo "No tenemos esa palabra en el diccionario";
        }
       }
       

    }else{
        echo "<script>alert('Tienes que escribir una palabra');</script>";
    }
    
    ?>


    <div class="container">
        <div class="abs-center">
            <form method="post" class="border p-3 form">
                <legend>Diccionario</legend>
                <div class="container">
                    <div class="form-group row">
                        <label for="Ecuacion">Buscador</label>
                        <input type="text" name="palabra" class="form-control"/>
                                                                                                
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="Ecuacion">Traduccion</label>
                        <input type="text" name="pregunta" class="form-control" value="<?php if (isset($traduccion)) {
                                                                                                    echo $traduccion;
                                                                                                } ?>" />
                                                                                                
                    </div>
                </div>
                 <br>    
                    <button type="submit" name="enviar" class="btn btn-primary col">Traducir</button>

            </form>
        </div>
    </div>
</body>

</html>