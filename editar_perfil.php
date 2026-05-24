<?php
session_start();
include("conexion.php");

// Verificar si el usuario está logueado
if (!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}

// Obtener los datos del usuario actual desde la base de datos
$correoSesion = $_SESSION['correo'];
$sql = "SELECT * FROM cuentas WHERE correo = '$correoSesion'";
$resultado = $conn->query($sql);
$usuario = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Perfil</title>
</head>
<body style="font-family: Arial; background-color: #f0f0f0; padding: 20px;">
    <div style="max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 8px;">
        <h2>Editar Perfil</h2>
        <form action="guardar_cambios.php" method="POST">
            <label>Teléfono:</label><br>
            <input type="text" name="telefono" value="<?php echo $usuario['telefono']; ?>" required><br><br>

            <label>Correo:</label><br>
            <input type="email" name="correo" value="<?php echo $usuario['correo']; ?>" required><br><br>

            <label>Contacto de Emergencia:</label><br>
            <input type="text" name="contacto_emergencia" value="<?php echo $usuario['contacto_emergencia']; ?>" required><br><br>

            <label>Nueva Contraseña (opcional):</label><br>
            <input type="password" name="nueva_contrasena"><br><br>

            <button type="submit">Guardar Cambios</button>
        </form>
        <p><a href="perfil.php">Volver al perfil</a></p>
    </div>
</body>
</html>
