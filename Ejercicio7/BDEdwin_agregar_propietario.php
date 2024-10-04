<?php
    $id_catastro = $_POST['id_catastro'];
    $ci = $_POST['ci'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $sexo = $_POST['sexo'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $telefono = $_POST['telefono'];

include("conexionBDEdwin.php");

$query = "INSERT INTO PROPIETARIO 
          (ci, nombre, paterno, materno, sexo, fecha_nacimiento, telefono,contrasena)
          VALUES 
          ('$ci', '$nombre', '$paterno', '$materno', '$sexo', '$fecha_nacimiento', '$telefono','$ci')";

$result = mysqli_query($conex, $query);

if ($result) {
    $id_propietario = mysqli_insert_id($conex);

    $query = "INSERT INTO POSEE 
              (id_propietario, id_catastro)
              VALUES 
              ($id_propietario, $id_catastro)";
    
    $result = mysqli_query($conex, $query);

    if ($result) {
        header("Location: Mostrar_Propietarios.php?mensaje=Propietario agregado exitosamente&id_catastro=$id_catastro");
        exit(); 
    } else {
        die("Error al crear POSEE: " . mysqli_error($conex));    }
} else {
    die("Error al agregar propietario: " . mysqli_error($conex));
}
?>
