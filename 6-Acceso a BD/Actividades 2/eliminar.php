<?php
$enlace = mysqli_connect("localhost", "Guille", "guille", "libros");
mysqli_set_charset($enlace, "UTF8");
if (mysqli_connect_errno()) {
    throw new Exception('La conexion ha fallado');
}
$ideliminar = $_GET['id'];
if ($resultado = mysqli_query(
    $enlace,
    "DELETE FROM hoja1 
    WHERE cod_libro = '$ideliminar';"
)) {
    echo "<h1>". 'Se ha eliminado correctamente el libro de indice ' . $ideliminar ."</h1>";
}
header("Refresh:3; url=./act1.php");
