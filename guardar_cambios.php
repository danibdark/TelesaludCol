<?php
session_start();
include("conexion.php");

// Verificar que el usuario está en sesión
if (!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}

$correoActual = $_SESSION['correo'];
$nuevoCorreo = $_POST['correo'];
$telefono = $_POST['telefono'];
$contactoEmergencia = $_POST['contacto_emergencia'];
$nuevaContrasena = $_POST['nueva_contrasena'];

// Si se quiere cambiar la contraseña
if (!empty($nuevaContrasena)) {
    $hash = password_hash($nuevaContrasena, PASSWORD_DEFAULT);
    $sql = "UPDATE cuentas SET correo='$nuevoCorreo', telefono='$telefono', contacto_emergencia='$contactoEmergencia', contrasena='$hash' WHERE correo='$correoActual'";
} else {
    $sql = "UPDATE cuentas SET correo='$nuevoCorreo', telefono='$telefono', contacto_emergencia='$contactoEmergencia' WHERE correo='$correoActual'";
}

if ($conn->query($sql) === TRUE) {
    // Actualizar la sesión si se cambió el correo
    $_SESSION['correo'] = $nuevoCorreo;
    header("Location: perfil.php");
    exit();
} else {
    echo "Error al actualizar: " . $conn->error;
}

$conn->close();
