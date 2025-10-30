<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

$sql = "INSERT INTO correos (nombre, correo) VALUES ('$nombre', '$correo')";
if ($conn->query($sql) === TRUE) {
    header("Location: home.php?success=1");
    exit();
} else {
    header("Location: home.php?error=1");
    exit();
}
$conn->close();
?>