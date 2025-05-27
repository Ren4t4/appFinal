<?php
$host = "app-servidor21051484.mysql.database.azure.com";
$usuario = "app-servidor21051484";
$contrasena = "Pi-21051484";
$base_datos = "calificaciones";

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
