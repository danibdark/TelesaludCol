<?php
include("conexion.php");

// Obtener los datos del formulario
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$tipo_id = $_POST['tipo_id'];
$numero_id = $_POST['numero_id'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$tipo_sangre = $_POST['tipo_sangre'];
$afecciones = $_POST['afecciones'];
$correo = $_POST['correo'];
$contacto_emergencia = $_POST['contacto_emergencia'];
$direccion = $_POST['direccion'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_DEFAULT); // Encriptar la contraseña

// Verificar que todos los campos fueron enviados
if (empty($nombres) || empty($apellidos) || empty($tipo_id) || empty($numero_id) || empty($edad) || empty($telefono) || empty($tipo_sangre) || empty($correo) || empty($contacto_emergencia) || empty($direccion) || empty($_POST['contrasena'])) {
    die("Por favor, complete todos los campos.");
}

// Insertar los datos en la base de datos
$sql = "INSERT INTO cuentas (nombres, apellidos, tipo_id, numero_id, edad, telefono, tipo_sangre, afecciones, correo, contacto_emergencia, direccion, contrasena)
        VALUES ('$nombres', '$apellidos', '$tipo_id', '$numero_id', '$edad', '$telefono', '$tipo_sangre', '$afecciones', '$correo', '$contacto_emergencia', '$direccion', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    // Registro exitoso, redirigir al login
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
