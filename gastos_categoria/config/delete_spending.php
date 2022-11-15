<?php
require_once('config.php');
$ID = $_GET ['ID'];

$query = "DELETE FROM gastos_categoria WHERE ID = '$ID'";
$conexion->query($query);
header("Location: ../index.php");
?>