<?php
include 'db.php';

$sql = "SELECT * FROM cursos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['nombre']) . "</td>";
        echo "<td>" . htmlspecialchars($row['descripcion']) . "</td>";
        echo "<td>" . htmlspecialchars($row['fecha_inicio']) . "</td>";
        echo "<td>" . htmlspecialchars($row['fecha_fin']) . "</td>";
        echo "<td>";
        echo "<a href='editar.php?id={$row['id']}' class='btn'>Editar</a>";
        echo "<form action='procesar.php' method='POST' style='display:inline;'>
                <input type='hidden' name='id' value='{$row['id']}'>
                <input type='hidden' name='accion' value='eliminar'>
                <button type='submit' class='btn eliminar'>Eliminar</button>
              </form>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No hay cursos registrados</td></tr>";
}

$conn->close();
?>
