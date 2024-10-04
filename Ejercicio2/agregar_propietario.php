<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Propietario</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php
        $id_catastro=$_GET['id_catastro']; 
    ?>
    <center>
    <div class="card shadow-lg" style="max-width: 450px; width: 100%;">
        <div class="card-header bg-success text-white text-center py-3">
            <h4 class="mb-0">
                Agregar Propietario
            </h4>
        </div>
        <div class="card-body p-4">
            <form action="BDEdwin_agregar_propietario.php" method="POST">
                <input type="hidden" class="form-control" name="id_catastro" id="id_catastro" value="<?php echo $id_catastro; ?>">

                <div class="mb-3">
                    <label for="ci" class="form-label">
                        Cédula de Identidad
                    </label>
                    <input type="text" class="form-control" name="ci" id="ci" required>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">
                        Nombre
                    </label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="paterno" class="form-label">
                        Apellido Paterno
                    </label>
                    <input type="text" class="form-control" name="paterno" id="paterno">
                </div>
                <div class="mb-3">
                    <label for="materno" class="form-label">
                        Apellido Materno
                    </label>
                    <input type="text" class="form-control" name="materno" id="materno">
                </div>
                <div class="mb-3">
                    <label for="sexo" class="form-label">Sexo</label>
                    <select class="form-select" name="sexo" id="sexo" required>
                        <option value="M">
                            Masculino
                        </option>
                        <option value="F">
                            Femenino
                        </option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="fecha_nacimiento" class="form-label">
                        Fecha de Nacimiento
                    </label>
                    <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" required>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">
                        Teléfono
                    </label>
                    <input type="text" class="form-control" name="telefono" id="telefono">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">
                        Agregar Propietario
                    </button>
                    <a href="admin.php" class="btn btn-outline-danger btn-lg">
                        Regresar
                    </a>
                </div>
            </form>
        </div>
        <div class="card-footer text-center bg-light">
            <small class="text-muted">
                Asegúrese de que los datos sean correctos antes de guardar.
            </small>
        </div>
    </div>
    </center>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
