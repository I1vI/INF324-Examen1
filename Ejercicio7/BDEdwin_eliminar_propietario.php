<?php
    $id_catastro = intval($_GET['id_catastro']);
    $xid = intval($_GET['id_propietario']);

include("conexionBDEdwin.php"); 

$query = "DELETE 
          FROM PROPIETARIO 
          WHERE id_propietario = $xid;";
$result = mysqli_query($conex, $query);

if ($result) {
    header("Location: Mostrar_Propietarios.php?mensaje=Se borró exitosamente :)&id_catastro=$id_catastro");
    exit();
} else {
    echo "Error al eliminar: " . mysqli_error($conex);
}
?>
