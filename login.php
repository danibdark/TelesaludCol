<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>

<div style="width: 50%; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">
    <h2 style="text-align: center;">Iniciar Sesión</h2>

    <!-- Formulario de inicio de sesión -->
    <form action="verificar_login.php" method="POST">
        
        <!-- Correo -->
        <div style="margin-bottom: 15px;">
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" style="width: 100%; padding: 10px; border-radius: 5px;" required>
        </div>

        <!-- Contraseña -->
        <div style="margin-bottom: 15px;">
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" style="width: 100%; padding: 10px; border-radius: 5px;" required>
        </div>

        <!-- Botón de inicio de sesión -->
        <div style="text-align: center;">
            <button type="submit" style="padding: 10px 20px; border-radius: 5px; background-color: #4CAF50; color: white; border: none;">Iniciar Sesión</button>
        </div>
    </form>

    <!-- Enlace para registro -->
    <p style="text-align: center; margin-top: 20px;">
        ¿No tienes una cuenta? <a href="registrar.php" style="color: #4CAF50; text-decoration: none;">Regístrate aquí</a>
    </p>
</div>

</body>
</html>
