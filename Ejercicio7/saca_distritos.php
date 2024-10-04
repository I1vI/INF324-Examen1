<?php
include("conexionBDEdwin.php");

$consulta = "SELECT DISTINCT distrito 
          FROM CATASTRO";
$result = mysqli_query($conex, $consulta);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . htmlspecialchars($row['distrito']) . '">'
                 . htmlspecialchars($row['distrito']) . 
             '</option>';
    }
?>
