<?php
require_once('config.php');
$ID= $_POST['ID'];
$nombre= $_POST ['nombre'];

$query = "INSERT INTO gastos_categoria (nombre) VALUES ('$nombre')";
$conexion->query($query);
header("Location: ../index.php");
?>