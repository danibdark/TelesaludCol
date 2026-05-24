<?php
session_start(); // Iniciar la sesión

// Verificar si el usuario está logueado
if (!isset($_SESSION['correo'])) {
    // Si no está logueado, redirigir al login
    header("Location: login.php");
    exit();
}

// Conectar a la base de datos
include("conexion.php");

// Obtener el correo del usuario desde la sesión
$correo = $_SESSION['correo'];

// Obtener los datos del formulario
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$contrasena = $_POST['contrasena'];

// Si la contraseña fue cambiada, la encriptamos
if (!empty($contrasena)) {
    $contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
    $sql = "UPDATE cuentas SET nombres='$nombres', apellidos='$apellidos', telefono='$telefono', direccion='$direccion', contrasena='$contrasena' WHERE correo='$correo'";
} else {
    // Si no cambiaron la contraseña, no la actualizamos
    $sql = "UPDATE cuentas SET nombres='$nombres', apellidos='$apellidos', telefono='$telefono', direccion='$direccion' WHERE correo='$correo'";
}

if ($conn->query($sql) === TRUE) {
    // Actualización exitosa
    echo "Datos actualizados correctamente.";
    header("Location: perfil.php"); // Redirigir al perfil
    exit();
} else {
    echo "Error al actualizar: " . $conn->error;
}

$conn->close();
?>
