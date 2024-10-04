<?php

    $id_catastro= $_POST['id_catastro'];
    $id_propietario = $_POST['id_propietario']; 
    $ci = $_POST['ci'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $sexo = $_POST['sexo'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $telefono = $_POST['telefono'];

include("conexionBDEdwin.php"); 

$query = "UPDATE PROPIETARIO 
          SET ci = '$ci', 
              nombre = '$nombre', 
              paterno = '$paterno', 
              materno = '$materno', 
              sexo = '$sexo', 
              fecha_nacimiento = '$fecha_nacimiento', 
              telefono = '$telefono' 
          WHERE id_propietario = $id_propietario";


$result = mysqli_query($conex, $query);

if ($result) {
    header("Location: Mostrar_Propietarios.php?mensaje=Se modificó exitosamente&id_catastro=$id_catastro");
    exit(); 
} else {
    echo "Error al modificar: " . mysqli_error($conex);
}

?>
