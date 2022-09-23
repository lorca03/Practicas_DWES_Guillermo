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
    $copas=[1,2,3,4,5,6,7,8,9,10,11,12];
    $bastos=[1,2,3,4,5,6,7,8,9,10,11,12];
    $oros=[1,2,3,4,5,6,7,8,9,10,11,12];
    $espadas=[1,2,3,4,5,6,7,8,9,10,11,12];
    $cartas=[$copas,$oros,$bastos,$espadas];
    
    
    if (isset($_POST["enviar"])&& isset($_POST["palabra"])) {
        $palabra=$_POST["palabra"];
        if (in_array(strtolower($palabra),$ingles) ) {
         $index= array_search($palabra,$ingles);
         $traduccion=$español[$index];
        }else {
         if (in_array(strtolower($palabra),$español) ) {
             $index= array_search($palabra,$español);
             $traduccion=$ingles[$index];
         }else {
             $traduccion= "No tenemos esa palabra en el diccionario";
         }
        }
       

    }
    
    ?>


    <div class="container">
        <div class="abs-center">
            <form method="post" class="border p-3 form">
                <legend>Cartas</legend>
                <div class="container">
                    <div class="form-group row">
                        <div class="col-4">
                        <input type="text" disabled name="palabra" class="form-control"/> 
                        </div>
                        <div class="col-4">
                        <input type="text" disabled name="palabra" class="form-control"/> 
                        </div>
                        <div class="col-4">
                        <input type="text" disabled name="palabra" class="form-control"/> 
                        </div>
                        <div class="col">
                        <input type="text" disabled name="palabra" class="form-control"/> 
                        </div>
                        <div class="col">
                        <input type="text" disabled name="palabra" class="form-control"/> 
                        </div>              
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="Ecuacion">Puntos</label>
                        <input type="text" name="pregunta" class="form-control" value="<?php if (isset($traduccion)) {
                                                                                                    echo $traduccion;
                                                                                                } ?>" />
                                            
                                            <button type="submit" name="enviar" class="btn btn-primary col">Traducir</button>
                    </div>
                </div>
                 <br>    
                    

            </form>
        </div>
    </div>
</body>

</html>