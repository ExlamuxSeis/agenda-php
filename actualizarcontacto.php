<?php
require 'conexion.php';
require 'consultas.php';

$tabla = 'contactos';
$id = $_POST['id'];
$conn = conexion::dbconexion();
$parametros = array(
    'nombre' => $_POST['nombre'],
    'apaterno' => $_POST['paterno'],
    'amaterno' => $_POST['materno'],
    'telefono' => $_POST['telefono'],
    'domicilio' => $_POST['domicilio']
);

actualizar($tabla, $parametros, $conn, $id);
header('Location: contactos.php');