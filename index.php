<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Cursos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Gestión de Cursos</h1>
    
    <!-- Botones para Crear y Editar Cursos -->
    <div class="acciones">
        <a href="crear.php" class="btn">Crear Nuevo Curso</a>
        <a href="editar.php" class="btn">Editar o Eliminar Curso</a>
    </div>

    <!-- Tabla de Cursos -->
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'listar.php'; ?>
        </tbody>
    </table>
</body>
</html>
