<?php
include 'db.php';

if (isset($_POST['accion'])) {
    $accion = $_POST['accion'];
    $id = $_POST['id'] ?? null;
    $nombre = $_POST['nombre'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';
    $fecha_inicio = $_POST['fecha_inicio'] ?? null;
    $fecha_fin = $_POST['fecha_fin'] ?? null;
    
    if ($accion === 'crear') {
        $sql = "INSERT INTO cursos (nombre, descripcion, fecha_inicio, fecha_fin) VALUES ('$nombre', '$descripcion', '$fecha_inicio', '$fecha_fin')";
    } elseif ($accion === 'actualizar') {
        $sql = "UPDATE cursos SET nombre='$nombre', descripcion='$descripcion', fecha_inicio='$fecha_inicio', fecha_fin='$fecha_fin' WHERE id=$id";
    } elseif ($accion === 'eliminar') {
        $sql = "DELETE FROM cursos WHERE id=$id";
    }
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>
