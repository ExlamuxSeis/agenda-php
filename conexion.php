<?php

    class conexion{
        public static function dbconexion(){
            // Creando un objeto para la conexión de la base de datos
            try {
                return $conn = new PDO('mysql:host=localhost;dbname=agenda2', 'root', '');
                // echo 'conexión establecida';
            } catch (PDOException $error) {
                die($error->getMessage());
            }
        }
    }