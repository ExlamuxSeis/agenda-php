<?php
require 'conexion.php';
require 'consultas.php';
require 'header.php';
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Contactos</h1>
</div>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Sistema para Guardar Contacto</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>

                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido paterno</th>
                                <th>Apellido materno</th>
                                <th>Telefono</th>
                                <th>Domicilio</th>
                                <th colspan="2" class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido paterno</th>
                                <th>Apellido materno</th>
                                <th>Telefono</th>
                                <th>Domicilio</th>
                                <th colspan="2" class="text-center">Acciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $conn = conexion::dbconexion();
                            $tabla = 'contactos';
                            $personas = getAll($conn, $tabla);
                            foreach ($personas as $persona) :
                            ?>
                                <tr>
                                    <td><?php echo $persona['nombre']; ?></td>
                                    <td><?php echo $persona['apaterno']; ?></td>
                                    <td><?php echo $persona['amaterno']; ?></td>
                                    <td><?php echo $persona['telefono']; ?></td>
                                    <td><?php echo $persona['domicilio']; ?></td>
                                    <td><a href="editarcontacto.php?id=<?php echo $persona['id'] ?>" class="btn btn-info">Editar</a></td>
                                    <td><a href="eliminarcontacto.php?id=<?php echo $persona['id'] ?>" class="btn btn-danger">Eliminar</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
require 'footer.php';
?>

</body>

</html>