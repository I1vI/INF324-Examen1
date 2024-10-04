<?php

    $xid=$_GET['id_catastro']; 

include("conexionBDEdwin.php"); 

$query = "DELETE 
          FROM CATASTRO 
          WHERE id_catastro = $xid;";

$result = mysqli_query($conex, $query);

if ($result) {
    header("Location: admin.php?mensaje=Se borro exitosamente :)");
    exit();
} else {
    echo "Error al modificar: " . mysqli_error($conex);
}
?>
