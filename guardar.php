<?php

require 'conexion.php';
require 'consultas.php';

//var_dump($_POST);

$tabla = 'contactos';
$parametros = [
    'nombre' => $_POST['nombre'],
    'apaterno' => $_POST['paterno'],
    'amaterno' => $_POST['materno'],
    'telefono' => $_POST['telefono'],
    'domicilio' => $_POST['domicilio']
];

$conexion = conexion::dbconexion();
crear($tabla, $parametros, $conexion);
header('Location: index.php');