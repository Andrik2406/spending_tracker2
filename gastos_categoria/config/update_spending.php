<?php
require_once('config.php');
$nombre= $_POST['nombre'];
$ID = $_POST ['ID'];

$query = "UPDATE gastos_categoria set nombre = '$nombre' WHERE ID=$ID";
$conexion->query($query);
//echo $query
header("Location: ../index.php");
?>