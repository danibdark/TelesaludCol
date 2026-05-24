<?php
include("conexion.php");
session_start();

$correo = trim($_POST['correo']);
$contrasena = trim($_POST['contrasena']);

$sql = "SELECT * FROM cuentas WHERE correo = '$correo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if (password_verify($contrasena, $row['contrasena'])) {
        // Guardar más información del usuario en sesión
        $_SESSION['id'] = $row['id'];  // si tienes un ID único
        $_SESSION['correo'] = $row['correo'];
        $_SESSION['nombres'] = $row['nombres'];
        $_SESSION['apellidos'] = $row['apellidos'];
        $_SESSION['edad'] = $row['edad'];
        $_SESSION['telefono'] = $row['telefono'];
        $_SESSION['tipo_sangre'] = $row['tipo_sangre'];
        $_SESSION['afexiones'] = $row['afexiones'];
        $_SESSION['contacto_emergencia'] = $row['contacto_emergencia'];

        // Redirigir al perfil
        header('Location: index1.php');
        exit();
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "El correo no existe en nuestros registros.";
}

$conn->close();
?>
