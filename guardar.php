<?php
$conexion = new mysqli("localhost", "root", "", "escuela");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$nombre = $_POST['nombre'];
$materia = $_POST['materia'];
$calificacion = $_POST['calificacion'];

$sql = "INSERT INTO registros (nombre, materia, calificacion) VALUES (?, ?, ?)";
$stmt = $conexion->prepare($sql);
$stmt->bind_param("ssi", $nombre, $materia, $calificacion);

if ($stmt->execute()) {
    header("Location: index.php");
} else {
    echo "Error al guardar: " . $conexion->error;
}

$stmt->close();
$conexion->close();
?>
