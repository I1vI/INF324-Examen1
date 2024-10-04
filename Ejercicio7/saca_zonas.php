<?php
include("conexionBDEdwin.php");

$xdistrito = $_GET['distrito'];
$consulta = "SELECT DISTINCT zona 
             FROM CATASTRO 
             WHERE distrito = ?";
$stmt = mysqli_prepare($conex, $consulta);
mysqli_stmt_bind_param($stmt, 's', $xdistrito);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

while ($row = mysqli_fetch_assoc($result)) {
    echo '<option value="' . htmlspecialchars($row['zona']) . '">' 
            . htmlspecialchars($row['zona']) . 
         '</option>';
}
mysqli_stmt_close($stmt);
?>
