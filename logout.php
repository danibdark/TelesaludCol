<?php
session_start(); // Iniciar la sesión

// Eliminar todos los datos de la sesión
session_unset();
session_destroy();

// Redirigir al login
header("Location: index.html");
exit();
?>
