<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Catastros</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <?php 
        include("conexionBDEdwin.php"); 
        $query = "SELECT * 
                  FROM CATASTRO";
        $result = mysqli_query($conex, $query);
    ?>
    <div class="container-fluid mt-5">
        <h1 class="mb-4 text-center">Administración de Catastros</h1>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Código Catastral</th>
                        <th>Xini</th>
                        <th>Yini</th>
                        <th>Xfin</th>
                        <th>Yfin</th>
                        <th>Superficie</th>
                        <th>Distrito</th>
                        <th>Zona</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['id_catastro']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['codigo_catastral']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['Xini']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['Yini']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['Xfin']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['Yfin']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['superficie']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['distrito']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['zona']) . "</td>";
                        echo "<td>";
                        $id_catastro = htmlspecialchars($row['id_catastro']);
                    ?>
                        <a class="btn btn-primary" href="modificar_catastro.php?id_catastro=<?php echo $id_catastro; ?>" style="font-size: 1rem; margin-right: 10px; color: white; padding: 0.375rem 0.75rem;">
                            <i class="fas fa-edit"></i> 
                            Modificar
                        </a>
                        <a class="btn btn-danger" href="BDEdwin_eliminar_catastro.php?id_catastro=<?php echo $id_catastro; ?>" style="font-size: 1rem; margin-right: 10px; color: white; padding: 0.375rem 0.75rem;">
                            <i class="fas fa-trash"></i> 
                            Eliminar
                        </a>
                        <a class="btn btn-info" href="mostrar_propietarios.php?id_catastro=<?php echo $id_catastro; ?>" style="font-size: 1rem; color: white; padding: 0.375rem 0.75rem;">
                            <i class="fas fa-users"></i> 
                            Mostrar Propietarios
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
            <a class="btn btn-secondary" href="index.php" style="font-size: 1.25rem; padding: 0.5rem 1rem;">
                <i class="fas fa-sign-out-alt"></i> 
                Salir
            </a>
            <a class="btn btn-secondary" href="Ejercicio7/index.php" style="font-size: 1.25rem; padding: 0.5rem 1rem;">
                Combo
            </a>
            <a class="btn btn-success" href="agregar_catastro.php" style="font-size: 1.25rem; padding: 0.5rem 1rem;">
                <i class="fas fa-plus"></i> 
                Agregar Catastro
            </a>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>