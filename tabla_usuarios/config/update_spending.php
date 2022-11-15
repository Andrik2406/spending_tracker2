<?php
require_once('config.php');

$nombre = $_POST['nombre'];
$status = $_POST['status'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$telefono = $_POST['telefono'];
$id = $_POST['id'];

$query = "UPDATE usuarios set nombre='$nombre', status='$status', correo='$correo', password='$password', telefono='$telefono' WHERE id=$id";

$conexion->query($query);


header("location: ../index.php");
?>

