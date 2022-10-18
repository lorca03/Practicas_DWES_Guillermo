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

        function __construct($aforo,$descripcion)
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
        function __toString()
        {
            return 'Vendidas: '+ $this->vendidas;
        }
    }


    ?>


    <div class="container">
        <div class="abs-center">
            <form method="post" class="border p-3 form">
                <div class="form-group row">
                    <label for="Ecuacion">
                        <h5>Grada</h5>
                    </label>
                    <?php
                    session_start();
                    if (!isset($_SESSION['grada'])) {
                        $_SESSION['grada'] = serialize( array( new Zona(3000,'Grada'), new Zona(3000,'Pista') ));
                    }
                    $grada = unserialize($_SESSION['grada']);
                    if (isset($_POST['vender1'])) {
                        if ($_POST['entradasVender1'] < $grada->getEntradasLibres()) {
                            $grada->vender($_POST['entradasVender1']);
                        }
                    }

                    ?>
                    <div class="col"><label for="">Vendidas</label><input type="text" disabled class="form-control col" value="<?php echo $grada->getVendidas() ?>" /></div>
                    <div class="col"><label for="">Restantes</label><input type="text" disabled class="form-control col" value="<?php echo $grada->getEntradasLibres() ?>" /></div>

                    <div class="col">
                        <div class="row">
                            <input type="number" min=0 name="entradasVender1" class="form-control" />
                        </div>
                        <div class="row"><button type="submit" name="vender1" class="btn btn-primary col">Vender</button>
                        </div>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="Ecuacion">
                        <h5>Pista</h5>
                    </label>
                    <?php $pista = new Zona(1000,''); ?>
                    <div class="col"><label for="">Vendidas</label><input type="text" disabled class="form-control col" value="<?php echo $pista->getVendidas()  ?>" /></div>
                    <div class="col"><label for="">Restantes</label><input type="text" disabled class="form-control col" value="<?php echo $pista->getAforo() ?>" /></div>
                    <div class="col">
                        <div class="row">
                            <input type="number" min=0 name="entradasVender2" class="form-control" />
                        </div>
                        <div class="row"><button type="submit" name="vender2" class="btn btn-primary col">Vender</button>
                        </div>
                    </div>


                </div>
                <div class="form-group row">
                    <label for="Ecuacion">
                        <h5>VIP</h5>
                    </label>
                    <?php $vip = new Zona(100,''); ?>
                    <div class="col"><label for="">Vendidas</label><input type="text" disabled class="form-control col" value="<?php echo $vip->getVendidas() ?>" /></div>
                    <div class="col"><label for="">Restantes</label><input type="text" disabled class="form-control col" value="<?php echo $vip->getAforo() ?>" /></div>
                    <div class="col">
                        <div class="row">
                            <input type="number" min=0 name="entradasVender3" class="form-control" />
                        </div>
                        <div class="row"><button type="submit" name="vender3" class="btn btn-primary col">Vender</button>
                        </div>
                    </div>


                </div>
                <div class="form-group row ">
                    <form method="post">
                        <input type="submit" name="eliminar" value="Eliminar Productos">
                        <a href="logout.php">Cerrar Sesion</a>
                    </form>
                </div>
                <br>


            </form>
        </div>
    </div>
</body>

</html>