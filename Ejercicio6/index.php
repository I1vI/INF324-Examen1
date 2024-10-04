<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Personas por Tipo de Impuesto</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-light">
    <?php 
        include("conexionBDEdwin.php"); 
        $consulta = "  SELECT 
                        COALESCE(MAX(CASE WHEN xc.codigo_catastral LIKE '1%' THEN CONCAT('Codigo Catastro: ',xc.codigo_catastral,CHAR(10),'Nombre: ',xp.paterno, ' ',xp.materno, ' ', xp.nombre,CHAR(10),'CI: ', xp.ci) END), '') AS ALTO,
                        COALESCE(MAX(CASE WHEN xc.codigo_catastral LIKE '2%' THEN CONCAT('Codigo Catastro: ',xc.codigo_catastral,CHAR(10),'Nombre: ',xp.paterno, ' ',xp.materno, ' ', xp.nombre,CHAR(10),'CI: ', xp.ci) END), '') AS MEDIO,
                        COALESCE(MAX(CASE WHEN xc.codigo_catastral LIKE '3%' THEN CONCAT('Codigo Catastro: ',xc.codigo_catastral,CHAR(10),'Nombre: ',xp.paterno, ' ',xp.materno, ' ', xp.nombre,CHAR(10),'CI: ', xp.ci) END), '') AS BAJO
                    FROM propietario xp, posee xpp, catastro xc
                    WHERE xp.id_propietario=xpp.id_propietario AND xpp.id_catastro=xc.id_catastro
                    GROUP BY xp.id_propietario";
        $result = mysqli_query($conex, $consulta);
        if (!$result) {
            echo "Error al ingresar: " . mysqli_error($conex) . "</div>";
        }
    ?>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">
                        <br>
                        <h1 class="mb-0 text-center">Lista de Personas por Tipo de Impuesto</h1>
                        <br>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th><i class="fas fa-arrow-up text-danger"></i> IMPUESTO ALTO</th>
                                        <th><i class="fas fa-equals text-warning"></i> IMPUESTO MEDIO</th>
                                        <th><i class="fas fa-arrow-down text-success"></i> IMPUESTO BAJO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td><div class='person-info'>" . ($row['ALTO'] ? nl2br(htmlspecialchars($row['ALTO'])) : '<span class="text-muted">No es propietario</span>') . "</div></td>";
                                        echo "<td><div class='person-info'>" . ($row['MEDIO'] ? nl2br(htmlspecialchars($row['MEDIO'])) : '<span class="text-muted">No es propietario</span>') . "</div></td>";
                                        echo "<td><div class='person-info'>" . ($row['BAJO'] ? nl2br(htmlspecialchars($row['BAJO'])) : '<span class="text-muted">No es propietario</span>') . "</div></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>