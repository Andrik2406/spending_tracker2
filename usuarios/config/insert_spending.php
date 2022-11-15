<?php
require_once('config.php');
$id = $_POST ['id'];
$correo = $_POST ['correo'];
$password = $_POST ['password'];
$telefono = $_POST ['telefono'];
$nombre = $_POST ['nombre'];
$status = $_POST ['status'];


$query = "INSERT INTO usuarios (correo, password, telefono, nombre) VALUES ('$correo', '$password','$telefono','$nombre')";
$conexion->query($query);
header("Location: ../index.php");
?>