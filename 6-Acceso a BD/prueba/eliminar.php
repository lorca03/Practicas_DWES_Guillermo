<?php
require_once 'conexionPDO.php';
$conexion = Conexion::make();
$ideliminar = $_GET['id'];
$consulta = "DELETE FROM libros 
WHERE cod_libro = :idEliminar";
$resultado = $conexion->prepare($consulta);
//$resultado->execute(array(":idEliminar" => $ideliminar));
if ($resultado->execute(array(":idEliminar" => $ideliminar))) {
    echo "<h1>" . 'Se ha eliminado correctamente el libro de indice ' . $ideliminar . "</h1>";
}
$resultado->closeCursor();
header("Refresh:3; url=crud.php");
