<?php
include("conexionBDEdwin.php");

// recibir nombre, contrasema
$username = $_POST['username'];
$password = $_POST['password'];

$consulta = "SELECT * 
             FROM PROPIETARIO 
             WHERE contrasena='$password' AND nombre='$username'";
$resultado = mysqli_query($conex, $consulta);
$row = mysqli_fetch_assoc($resultado);
$n_filas = mysqli_num_rows($resultado);

if ($n_filas > 0) {
    $id = $row['id_propietario'];
    header("Location: user.php?id_propietario=$id");
    exit();
}

if ($username === 'admin' && $password === 'admin') {
    header("Location: admin.php");
    exit();
}

header("Location: index.php?error=invalid_credentials");
exit();
?>
