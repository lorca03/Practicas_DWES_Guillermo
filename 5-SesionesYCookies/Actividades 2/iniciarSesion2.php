<?php

$resetear = !empty($_POST['reset']) ? $_POST['reset'] : null;
if ($resetear == 'Resetear Visitas') {
    setcookie('visitas', 1, time() + 3600 * 24);
    $mensaje = 'Bienvenido por primera vez a nuesta web';
} else {
    if (isset($_COOKIE['visitas'])) {
        $mensaje = 'Numero de visitas: ' . $_COOKIE['visitas'];
    } else {
        $mensaje = 'Bienvenido por primera vez a nuesta web';
    }
}

?>

<div class="container">
    <div class="abs-center">
        <form method="post" class="border p-3 ">
            <div class="container">
                <div class="form-group row">
                    <label>Usuario</label>
                    <input type="text" class="form-control col" name="usuario">
                    <label>Paswword</label>
                    <input type="password" class="form-control col" name="contraseña">
                </div>
            </div>
            <br>
            <div class=" row ">
                <div class="col"><input type="submit" name="iniciar" value="Iniciar sesion"></div>
                <div class="col"><input type="submit" name="reset" value="Resetear Visitas"></div>
                <div class="col">
                    <input type="text" id="visitas" disabled value="<?php if (isset($mensaje)) {
                                                                        echo $mensaje;
                                                                    } ?>">
                </div>

            </div>
        </form>
    </div>
</div>
<?php

$usuario = !empty($_POST['usuario']) ? $_POST['usuario'] : null;
$contraseña = !empty($_POST['contraseña']) ? $_POST['contraseña'] : null;
$iniciar = !empty($_POST['iniciar']) ? $_POST['iniciar'] : null;
if ($iniciar == 'Iniciar sesion') {
    if ($usuario == null || $contraseña == null) {
        echo  "<script> alert('Debes introducir un usuario y una contraseña')</script>";
    } else {
        if ($usuario == $contraseña) {
            $_SESSION['sesion'] = true;
            if (isset($_COOKIE['visitas'])) {
                setcookie('visitas', ++$_COOKIE['visitas'], time() + 3600 * 24);
                $mensaje = 'Numero de visitas: ' . $_COOKIE['visitas'];
            } else {
                setcookie('visitas', 1, time() + 3600 * 24);
                $mensaje = 'Bienvenido por primera vez a nuesta web';
            }
            header('Location:act3.php');
        }
    }
}
