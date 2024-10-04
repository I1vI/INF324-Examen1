<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Propietarios</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <?php 
        $id_catastro = intval($_GET['id_catastro']);
        include("conexionBDEdwin.php"); 
        
        $query = "SELECT xpp.*
                  FROM posee xp, propietario xpp
                  WHERE xp.id_propietario = xpp.id_propietario
                  AND xp.id_catastro = $id_catastro";
        $result = mysqli_query($conex, $query);

        if (!$result) {
            die("Error en la consulta: " . mysqli_error($conex));
        }
    ?>
    <div class="container-fluid mt-5">
        <h1 class="mb-4 text-center">Administración de Propietarios</h1>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Ci</th>
                        <th>Nombre</th>
                        <th>Paterno</th>
                        <th>Materno</th>
                        <th>Sexo</th>
                        <th>Fecha Nacimiento</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['id_propietario']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['ci']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['paterno']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['materno']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['sexo']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['fecha_nacimiento']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['telefono']) . "</td>";
                        echo "<td>";
                        $id_propietario = htmlspecialchars($row['id_propietario']);
                    ?>
                        <a class="btn btn-primary" href="modificar_propietario.php?id_propietario=<?php echo $id_propietario; ?>&id_catastro=<?php echo $id_catastro; ?>" style="font-size: 1rem; margin-right: 10px; color: white; padding: 0.375rem 0.75rem;">
                            <i class="fas fa-edit"></i> 
                            Modificar
                        </a>
                        <a class="btn btn-danger" href="BDEdwin_eliminar_propietario.php?id_propietario=<?php echo $id_propietario; ?>&id_catastro=<?php echo $id_catastro; ?>" style="font-size: 1rem; margin-right: 10px; color: white; padding: 0.375rem 0.75rem;">
                            <i class="fas fa-trash"></i> 
                            Eliminar
                        </a>
                    <?php
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between mb-3">
            <a class="btn btn-secondary" href="admin.php?id_catastro=<?php echo $id_catastro; ?>" style="font-size: 1.25rem; padding: 0.5rem 1rem;">
                <i class="fas fa-sign-out-alt"></i> 
                Salir
            </a>
            <a class="btn btn-success" href="agregar_propietario.php?id_catastro=<?php echo $id_catastro; ?>" style="font-size: 1.25rem; padding: 0.5rem 1rem;">
                <i class="fas fa-plus"></i> 
                Agregar Propietario
            </a>
        </div>

    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
