<?php
require 'conexion.php';
require 'consultas.php';
// var_dump($_GET);
$id = $_GET['id'];
$tabla = 'contactos';
$conn = conexion::dbconexion();
eliminar($conn, $tabla, $id);
header('Location: contactos.php');