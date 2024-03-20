<?php
require 'header.php';
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Capturar persona</h1>
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
                    <form method="post" action="actualizarcontacto.php">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" autofocus id="nombre" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="paterno" class="form-label">Apellido paterno:</label>
                            <input type="text" class="form-control" id="paterno" name="paterno">
                        </div>
                        <div class="mb-3">
                            <label for="materno" class="form-label">Apellido materno:</label>
                            <input type="text" class="form-control" id="materno" name="materno">
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Telefono:</label>
                            <input type="number" class="form-control" id="telefono" name="telefono">
                        </div>
                        <div class="mb-3">
                            <label for="domicilio" class="form-label">Domicilio:</label>
                            <input type="text" class="form-control" id="domicilio" name="domicilio">
                        </div>
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </form>
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