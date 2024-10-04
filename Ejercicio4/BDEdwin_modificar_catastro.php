<?php

    $xid = $_POST['id_catastro']; 
    $codigo_catastral = $_POST['codigo_catastral'];
    $Xini = $_POST['Xini'];
    $Yini = $_POST['Yini'];
    $Xfin = $_POST['Xfin'];
    $Yfin = $_POST['Yfin'];
    $superficie = $_POST['superficie'];
    $distrito = $_POST['distrito'];
    $zona = $_POST['zona'];

include("conexionBDEdwin.php"); 

$query = "UPDATE CATASTRO 
          SET codigo_catastral = '$codigo_catastral', 
              Xini = '$Xini', 
              Yini = '$Yini', 
              Xfin = '$Xfin', 
              Yfin = '$Yfin', 
              superficie = '$superficie', 
              distrito = '$distrito', 
              zona = '$zona' 
          WHERE id_catastro = $xid";

$result = mysqli_query($conex, $query);

if ($result) {
    header("Location: admin.php?mensaje=Se modificó exitosamente :)");
    exit(); 
} else {
    echo "Error al modificar: " . mysqli_error($conex);
}
?>
