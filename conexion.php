<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost"; 
$usuario = "root";   
$contrasena = "";    
$baseDeDatos = "usuariosdb";

// Crear conexión
$conn = new mysqli($host, $usuario, $contrasena, $baseDeDatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "¡Conexión exitosa!";
}

// Código temporal para actualizar tu contraseña con el hash de tu propio PHP
//$password_encriptada = password_hash('12345', PASSWORD_DEFAULT);
//$sql_update = "UPDATE cuentas SET contrasena = '$password_encriptada' WHERE correo = 'nayelis@unad.edu.co'";
//$conn->query($sql_update);

?>