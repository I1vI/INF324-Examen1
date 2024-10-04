<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Propietario</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php
        $id_catastro = $_GET['id_catastro']; 
        $xid = $_GET['id_propietario']; 
        include("conexionBDEdwin.php"); 
        $query = "SELECT * 
                  FROM PROPIETARIO 
                  WHERE id_propietario = $xid";
        $result = mysqli_query($conex, $query);
        $row = mysqli_fetch_assoc($result);
    ?>
    <center>
    <div class="card shadow-lg" style="max-width: 450px; width: 100%;">
        <div class="card-header bg-success text-white text-center py-3">
            <h4 class="mb-0">Modificar Propietario</h4>
        </div>
        <div class="card-body p-4">
            <form action="BDEdwin_modificar_propietario.php" method="POST">
                <input type="hidden" class="form-control" name="id_catastro" id="ci" value="<?php echo $id_catastro; ?>" >
                <div class="mb-3">
                    <label for="id_propietario" class="form-label">
                        ID Propietario
                    </label>
                    <input readonly type="text" class="form-control" name="id_propietario" id="id_propietario" value="<?php echo $row['id_propietario']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="ci" class="form-label">
                        Cédula de Identidad
                    </label>
                    <input type="text" class="form-control" name="ci" id="ci" value="<?php echo $row['ci']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">
                        Nombre
                    </label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $row['nombre']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="paterno" class="form-label">
                        Apellido Paterno
                    </label>
                    <input type="text" class="form-control" name="paterno" id="paterno" value="<?php echo $row['paterno']; ?>">
                </div>
                <div class="mb-3">
                    <label for="materno" class="form-label">
                        Apellido Materno
                    </label>
                    <input type="text" class="form-control" name="materno" id="materno" value="<?php echo $row['materno']; ?>">
                </div>
                <div class="mb-3">
                    <label for="sexo" class="form-label">Sexo</label>
                    <select class="form-select" name="sexo" id="sexo" required>
                        <option value="M" <?php echo ($row['sexo'] == 'M') ? 'selected' : ''; ?>>
                            Masculino
                        </option>
                        <option value="F" <?php echo ($row['sexo'] == 'F') ? 'selected' : ''; ?>>
                            Femenino
                        </option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="fecha_nacimiento" class="form-label">
                        Fecha de Nacimiento
                    </label>
                    <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">
                        Teléfono
                    </label>
                    <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $row['telefono']; ?>">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">
                        Guardar Cambios
                    </button>
                    <a href="Mostrar_Propietarios.php?id_catastro=<?php echo$id_catastro;?>" class="btn btn-outline-danger btn-lg">
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
