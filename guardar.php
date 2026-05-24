<?php
// Incluir la conexión
include("conexion.php");

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];

// Insertar en la base de datos
$sql = "INSERT INTO usuarios (nombre, apellido, edad) VALUES ('$nombre', '$apellido', '$edad')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
