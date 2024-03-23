<?php

// Con ob_start sirve para poner que el contenido html5 se pueda meter en una variable
ob_start();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Agrega tus estilos CSS aquí */
        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th,
        .table td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <?php
    require 'conexion.php';
    require 'consultas.php';
    $conn = conexion::dbconexion();
    $tabla = 'contactos';
    $personas = getAll($conn, $tabla);
    ?>
    <h1>Lista de contactos</h1>
    <table class="table" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>Telefono</th>
                <th>Domicilio</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($personas as $persona) :
            ?>
                <tr>
                    <td><?php echo $persona['nombre']; ?></td>
                    <td><?php echo $persona['apaterno']; ?></td>
                    <td><?php echo $persona['amaterno']; ?></td>
                    <td><?php echo $persona['telefono']; ?></td>
                    <td><?php echo $persona['domicilio']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
<?php

$html = ob_get_clean();
// echo $html;
require_once 'libreria/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true)); // Para que pueda leer archivos css externos o imágenes
$dompdf->setOptions($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('letter');
// $dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream('reporte.pdf', array('Attachment' => false));

?>