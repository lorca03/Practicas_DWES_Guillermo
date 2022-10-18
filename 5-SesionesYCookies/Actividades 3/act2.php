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
    class Zona
    {
        private $descripcion;
        private $aforo;
        private $entradasLibres;
        private $vendidas;

        function __construct($aforo, $descripcion)
        {
            $this->descripcion = $descripcion;
            $this->aforo = $aforo;
            $this->entradasLibres = $aforo;
            $this->vendidas = 0;
        }

        public function getEntradasLibres()
        {
            return $this->entradasLibres;
        }
        public function getAforo()
        {
            return $this->aforo;
        }

        public function getVendidas()
        {
            return $this->vendidas;
        }
        function vender($entradas)
        {
            $this->vendidas += $entradas;
            $this->entradasLibres -= $entradas;
        }
        public function getDescripcion()
        {
            return $this->descripcion;
        }
        /* function __toString()
        {
            return 'Vendidas: ';
        }*/
    }


    ?>


    <div class="container">
        <div class="abs-center">
            <form method="post" class="border p-3 form">
                <?php
                session_start();
                if (!isset($_SESSION['zonas'])) {
                    $_SESSION['zonas'] = array(new Zona(3000, 'Grada'), new Zona(1000, 'Pista'), new Zona(100, 'VIP'));
                }
                foreach ($_SESSION['zonas'] as $key) {
                ?>
                    <div class="form-group row">
                        <label for="Ecuacion">
                            <h5><?= $key->getDescripcion() ?></h5>
                        </label>
                        <?php
                        switch ($key->getDescripcion()) {
                            case 'Grada':
                                if (isset($_POST['Grada'])) {

                                    if (isset($_POST['GradaEntradas'])) {
                                        if ($_POST['GradaEntradas']!='') {
                                            if ($_POST['GradaEntradas'] <= $key->getEntradasLibres()) {
                                                $key->vender($_POST['GradaEntradas']);
                                            }else {
                                                echo "<script> alert('No hay suficientes entradas en la zona: ".$key->getDescripcion()."')</script>";
                                            }
                                        }
                                        
                                    }
                                }
                                break;
                            case 'Pista':
                                if (isset($_POST['Pista'])) {

                                    if (isset($_POST['PistaEntradas'])) {
                                        if ($_POST['PistaEntradas']!='') {
                                            if ($_POST['PistaEntradas'] <= $key->getEntradasLibres()) {
                                            
                                                $key->vender($_POST['PistaEntradas']);
                                            }else {
                                                echo "<script> alert('No hay suficientes entradas en la zona: ".$key->getDescripcion()."')</script>";
                                            }   
                                        }
                                        
                                    }
                                }
                                break;
                            case 'VIP':
                                if (isset($_POST['VIP'])) {
                                    if (isset($_POST['VIPEntradas'])) {
                                        if ($_POST['VIPEntradas']!='') {
                                            if ($_POST['VIPEntradas'] <= $key->getEntradasLibres()) {
                                                $key->vender($_POST['VIPEntradas']);
                                            }else {
                                                echo "<script> alert('No hay suficientes entradas en la zona: ".$key->getDescripcion()."')</script>";
                                            }   
                                        }
                                        
                                    }
                                }
                                break;
                        }



                        ?>
                        <div class="col"><label for="">Vendidas</label><input type="text" disabled class="form-control col" value="<?php echo $key->getVendidas() ?>" /></div>
                        <div class="col"><label for="">Restantes</label><input type="text" disabled class="form-control col" value="<?php echo $key->getEntradasLibres() ?>" /></div>

                        <div class="col">
                            <div class="row">
                                <input type="number" min=0 name="<?= $key->getDescripcion() ?>Entradas" class="form-control" />
                            </div>
                            <div class="row"><button type="submit" name="<?= $key->getDescripcion() ?>" class="btn btn-primary col">Vender</button>
                            </div>
                        </div>

                    </div>
                <?php


                }

                ?>
                <div class="form-group row ">
                    <form method="post">
                        <a href="logout.php">Cerrar Sesion</a>
                    </form>
                </div>
                <br>


            </form>
        </div>
    </div>
</body>

</html>