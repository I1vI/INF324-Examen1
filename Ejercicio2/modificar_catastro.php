<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Catastro</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php 
        $xid=$_GET['id_catastro']; 
        include("conexionBDEdwin.php"); 
        $query = "SELECT * 
                  FROM CATASTRO 
                  WHERE id_catastro = $xid";
        $result = mysqli_query($conex, $query);
        $row = mysqli_fetch_assoc($result);
    ?>
    <center>
    <div class="card shadow-lg" style="max-width: 450px; width: 100%;">

        <div class="card-header bg-success text-white text-center py-3">
            <h4 class="mb-0">Modificar Catastro</h4>
        </div>

        <div class="card-body p-4">
            <form action="BDEdwin_modificar_catastro.php" method="POST">
                <div class="mb-3">
                    <label for="codigo_catastral" class="form-label">ID CATASTRO</label>
                    <input readonly="" type="text" class="form-control" name="id_catastro" id="codigo_catastral" value="<?php echo $xid; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="codigo_catastral" class="form-label">Código Catastral</label>
                    <input type="text" class="form-control" name="codigo_catastral" id="codigo_catastral" value="<?php echo $row['codigo_catastral']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="Xini" class="form-label">X Inicial</label>
                    <input type="text" class="form-control" name="Xini" id="Xini" value="<?php echo $row['Xini']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="Yini" class="form-label">Y Inicial</label>
                    <input type="text" class="form-control" name="Yini" id="Yini" value="<?php echo $row['Yini']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="Xfin" class="form-label">X Final</label>
                    <input type="text" class="form-control" name="Xfin" id="Xfin" value="<?php echo $row['Xfin']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="Yfin" class="form-label">Y Final</label>
                    <input type="text" class="form-control" name="Yfin" id="Yfin" value="<?php echo $row['Yfin']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="superficie" class="form-label">Superficie</label>
                    <input type="text" class="form-control" name="superficie" id="superficie" value="<?php echo $row['superficie']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="distrito" class="form-label">Distrito</label>
                    <input type="text" class="form-control" name="distrito" id="distrito" value="<?php echo $row['distrito']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="zona" class="form-label">Zona</label>
                    <input type="text" class="form-control" name="zona" id="zona" value="<?php echo $row['zona']; ?>" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">
                        Guardar Cambios
                    </button>
                    <a href="admin.php" class="btn btn-outline-danger btn-lg">
                        Regresar</a>
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
