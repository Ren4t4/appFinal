<?php
$host = "app-servidor21051484.mysql.database.azure.com";
$usuario = "app-servidor21051484@app-servidor21051484"; // incluye el dominio si Azure lo requiere
$contrasena = "Pi-21051484";
$base_datos = "calificaciones";

// Crear conexión
$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
