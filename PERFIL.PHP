<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['correo'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Perfil</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 30px;">

    <div style="max-width: 600px; margin: auto; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px #ccc;">
        <h2 style="text-align: center;">Bienvenido/a, <?php echo $_SESSION['nombres']; ?>!</h2>

        <h3>Información personal:</h3>
        <ul>
            <li><strong>Apellidos:</strong> <?php echo $_SESSION['apellidos']; ?></li>
            <li><strong>Edad:</strong> <?php echo $_SESSION['edad']; ?></li>
            <li><strong>Correo:</strong> <?php echo $_SESSION['correo']; ?></li>
            <li><strong>Teléfono:</strong> <?php echo $_SESSION['telefono']; ?></li>
            <li><strong>Tipo de Sangre:</strong> <?php echo $_SESSION['tipo_sangre']; ?></li>
            <li><strong>Afexiones:</strong> <?php echo $_SESSION['afexiones']; ?></li>
            <li><strong>Contacto de Emergencia:</strong> <?php echo $_SESSION['contacto_emergencia']; ?></li>
        </ul>
        <div style="text-align: center; margin-top: 20px;">
    <a href="editar_perfil.php" style="padding: 10px 20px; background-color: #007bff; color: white; border-radius: 5px; text-decoration: none;">Editar mi perfil</a>
</div>

        <p style="text-align: center;"><a href="logout.php" style="color: red;">Cerrar sesión</a></p>
    </div>

</body>
</html>
