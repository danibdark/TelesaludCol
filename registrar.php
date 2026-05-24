<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Cuenta Completa</title>
</head>
<body>

<div style="width: 60%; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9;">
    <h2 style="text-align: center;">Registrar Nueva Cuenta</h2>

    <form action="guardar_cuenta.php" method="POST">
        
        <!-- Nombres -->
        <div style="margin-bottom: 15px;">
            <label for="nombres">Nombres:</label>
            <input type="text" id="nombres" name="nombres" style="width: 100%; padding: 10px; border-radius: 5px;" required>
        </div>

        <!-- Apellidos -->
        <div style="margin-bottom: 15px;">
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" style="width: 100%; padding: 10px; border-radius: 5px;" required>
        </div>

        <!-- Tipo de Identificación -->
        <div style="margin-bottom: 15px;">
            <label for="tipo_id">Tipo de Identificación:</label>
            <select id="tipo_id" name="tipo_id" style="width: 100%; padding: 10px; border-radius: 5px;" required>
                <option value="">Seleccione</option>
                <option value="CC">Cédula de ciudadanía</option>
                <option value="TI">Tarjeta de identidad</option>
                <option value="CE">Cédula de extranjería</option>
            </select>
        </div>

        <!-- Número de Identificación -->
        <div style="margin-bottom: 15px;">
            <label for="numero_id">Número de Identificación:</label>
            <input type="text" id="numero_id" name="numero_id" style="width: 100%; padding: 10px; border-radius: 5px;" required>
        </div>

        <!-- Edad -->
        <div style="margin-bottom: 15px;">
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" style="width: 100%; padding: 10px; border-radius: 5px;" required>
        </div>

        <!-- Teléfono -->
        <div style="margin-bottom: 15px;">
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" style="width: 100%; padding: 10px; border-radius: 5px;" required>
        </div>

        <!-- Tipo de Sangre -->
        <div style="margin-bottom: 15px;">
            <label for="tipo_sangre">Tipo de Sangre:</label>
            <select id="tipo_sangre" name="tipo_sangre" style="width: 100%; padding: 10px; border-radius: 5px;" required>
                <option value="">Seleccione</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
        </div>

        <!-- Afecciones (opcional) -->
        <div style="margin-bottom: 15px;">
            <label for="afecciones">Afecciones (opcional):</label>
            <textarea id="afecciones" name="afecciones" style="width: 100%; padding: 10px; border-radius: 5px; height: 100px;"></textarea>
        </div>

        <!-- Correo Electrónico -->
        <div style="margin-bottom: 15px;">
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" style="width: 100%; padding: 10px; border-radius: 5px;" required>
        </div>

        <!-- Contacto de Emergencia -->
        <div style="margin-bottom: 15px;">
            <label for="contacto_emergencia">Contacto de Emergencia:</label>
            <input type="text" id="contacto_emergencia" name="contacto_emergencia" style="width: 100%; padding: 10px; border-radius: 5px;" required>
        </div>
        <!-- Direccion -->
        <div style="margin-bottom: 15px;">
        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" required><br><br>
        </div>
        <!-- Contraseña -->
        <div style="margin-bottom: 15px;">
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" style="width: 100%; padding: 10px; border-radius: 5px;" required>
        </div>

        <div style="text-align: center;">
            <button type="submit" style="padding: 10px 20px; border-radius: 5px; background-color: #4CAF50; color: white; border: none;">Registrar Cuenta</button>
        </div>
    </form>
</div>

</body>
</html>
