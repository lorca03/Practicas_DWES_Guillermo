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
                <input type="submit" name="iniciar" value="Iniciar sesion">
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
            header('Location:act2.php');
        }
    }
}
