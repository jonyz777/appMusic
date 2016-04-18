<?php
session_start();

$usuario = $_SESSION['usuario'];
$contrasena = $_SESSION['contrasena'];

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$direccion = $_POST['direccion'];
$artista = $_POST['artista'];

require ('conexion.php');

mysql_query("INSERT INTO canciones VALUES ('$usuario', '$contrasena', '$titulo', '$categoria', '$direccion', '$artista' )", $link);

header('Location: home.php');
 
?>