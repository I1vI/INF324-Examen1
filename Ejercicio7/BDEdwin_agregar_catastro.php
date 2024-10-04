<?php

    $codigo_catastral = $_POST['codigo_catastral'];
    $Xini = $_POST['Xini'];
    $Yini = $_POST['Yini'];
    $Xfin = $_POST['Xfin'];
    $Yfin = $_POST['Yfin'];
    $superficie = $_POST['superficie'];
    $distrito = $_POST['distrito'];
    $zona = $_POST['zona'];

include("conexionBDEdwin.php"); 


$query = "INSERT INTO
          CATASTRO (codigo_catastral, Xini, Yini, Xfin, Yfin, superficie, distrito, zona)
          VALUES 
          ('$codigo_catastral', '$Xini', '$Yini', '$Xfin', '$Yfin', '$superficie', '$distrito', '$zona')";

$result = mysqli_query($conex, $query);

if ($result) {
    $id_catastro = mysqli_insert_id($conex);
    header("Location: agregar_propietario.php?id_catastro=$id_catastro");
    exit(); 
} else {
    die("Error al agregar catastro: " . mysqli_error($conex));
}
?>
