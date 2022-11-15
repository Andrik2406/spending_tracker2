<?php
require_once('config.php');
$cantidad= $_POST['Cantidad'];
$categoria= $_POST ['Categoria'];
$descripcion = $_POST ['descripcion'];

$query = "INSERT INTO gastos (Cantidad, Categoria, descripcion) VALUES ('$cantidad', '$categoria','$descripcion')";
$conexion->query($query);
header("Location: ../index.php");
?>