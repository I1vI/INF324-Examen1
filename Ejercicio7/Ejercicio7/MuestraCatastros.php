<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propiedades y Zonas</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <?php 
        include("conexionBDEdwin.php");

        $xdistrito = $_GET['distrito'];
        $xzona = $_GET['zona'];

        $consulta = "SELECT * 
                    FROM CATASTRO 
                    WHERE distrito = '$xdistrito' AND zona = '$xzona'";
        $result = mysqli_query($conex, $consulta);

        if (!$result) {
            die("Error en la consulta de catastros: " . mysqli_error($conex));
        }
    ?>


    <div class="container">
        <div class="card-header bg-primary text-white mt-4 mb-4 p-1">
            <h1 class="mb-4 text-center">
                Catastros del distrito <?php echo htmlspecialchars($xdistrito); ?> y la zona <?php echo htmlspecialchars($xzona); ?>
            </h1>
        </div>

        <div class="table-container">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Código Catastral</th>
                        <th>Xini</th>
                        <th>Yini</th>
                        <th>Xfin</th>
                        <th>Yfin</th>
                        <th>Superficie</th>
                        <th>Distrito</th>
                        <th>Zona</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($result)): ?>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['codigo_catastral']); ?></td>
                                <td><?php echo htmlspecialchars($row['Xini']); ?></td>
                                <td><?php echo htmlspecialchars($row['Yini']); ?></td>
                                <td><?php echo htmlspecialchars($row['Xfin']); ?></td>
                                <td><?php echo htmlspecialchars($row['Yfin']); ?></td>
                                <td><?php echo htmlspecialchars($row['superficie']); ?></td>
                                <td><?php echo htmlspecialchars($row['distrito']); ?></td>
                                <td><?php echo htmlspecialchars($row['zona']); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8" class="text-center">No se encontraron catastros para los criterios seleccionados.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between mb-3">
            <a class="btn btn-secondary btn-lg" href="index.php">
                <i class="fas fa-sign-out-alt"></i> 
                Salir
            </a>
        </div>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
