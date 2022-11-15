<?php
require_once('config.php');
$Cantidad= $_POST['Cantidad'];
$Categoria= $_POST ['Categoria'];
$descripcion = $_POST ['descripcion'];
$ID = $_POST ['ID'];

$query = "UPDATE gastos set Cantidad = '$Cantidad', Categoria = '$Categoria', descripcion = '$descripcion'    WHERE ID = '$ID' ";
$conexion->query($query);
header("Location: ../index.php");
?>