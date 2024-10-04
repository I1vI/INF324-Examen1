<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Datos y Catastros</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <?php 
    include("conexionBDEdwin.php");
    $id = mysqli_real_escape_string($conex, $_GET['id_propietario']);
    
    $query_propietario = "SELECT * 
                          FROM PROPIETARIO 
                          WHERE id_propietario = $id";
    $result_propietario = mysqli_query($conex, $query_propietario);
    if (!$result_propietario) {
        die("Error en la consulta del propietario: " . mysqli_error($conex));
    }
    $propietario = mysqli_fetch_assoc($result_propietario);
    

    $query_catastros = "SELECT xc.* 
                        FROM POSEE xp,CATASTRO xc 
                        WHERE xp.id_propietario = $id
                        AND xp.id_catastro = xc.id_catastro";
    $result_catastros = mysqli_query($conex, $query_catastros);
    
    if (!$result_catastros) {
        die("Error en la consulta de catastros: " . mysqli_error($conex));
    }
    ?>
    
    <div class="container">
        <h1 class="mb-4 text-center">
            Bienvenido <?php echo htmlspecialchars($propietario['nombre']); ?> 
        </h1>
        <div class="table-container">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Datos</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>CI</td>
                        <td>
                            <?php echo htmlspecialchars($propietario['ci']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td>
                            <?php echo htmlspecialchars($propietario['nombre']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Apellido Paterno</td>
                        <td>
                            <?php echo htmlspecialchars($propietario['paterno']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Apellido Materno</td>
                        <td>
                            <?php echo htmlspecialchars($propietario['materno']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Sexo</td>
                        <td>
                            <?php echo htmlspecialchars($propietario['sexo']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha de Nacimiento</td>
                        <td>
                            <?php echo htmlspecialchars($propietario['fecha_nacimiento']); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Teléfono</td>
                        <td>
                            <?php echo htmlspecialchars($propietario['telefono']); ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h1 class="mb-4 text-center">Mis Catastros</h1>
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
                        <th>Impuesto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result_catastros)): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['codigo_catastral']); ?></td>
                            <td><?php echo htmlspecialchars($row['Xini']); ?></td>
                            <td><?php echo htmlspecialchars($row['Yini']); ?></td>
                            <td><?php echo htmlspecialchars($row['Xfin']); ?></td>
                            <td><?php echo htmlspecialchars($row['Yfin']); ?></td>
                            <td><?php echo htmlspecialchars($row['superficie']); ?></td>
                            <td><?php echo htmlspecialchars($row['distrito']); ?></td>
                            <td><?php echo htmlspecialchars($row['zona']); ?></td>
                            <td>
                            <a class="btn btn-primary" href="http://localhost:8085/Impuesto/Servlet?codigo_catastral=<?php echo $row['codigo_catastral']; ?>" 
                               style="font-size: 1rem; margin-right: 10px; color: white; padding: 0.375rem 0.75rem;">
                                <i class="fas fa-edit"></i> 
                                Impuesto
                            </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
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

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>