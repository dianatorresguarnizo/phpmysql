<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Curso</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Crear Nuevo Curso</h1>
    
    <form action="procesar.php" method="POST">
        <input type="hidden" name="accion" value="crear">
        
        <label for="nombre">Nombre del Curso:</label>
        <input type="text" name="nombre" required>
        
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion"></textarea>
        
        <label for="fecha_inicio">Fecha de Inicio:</label>
        <input type="date" name="fecha_inicio">
        
        <label for="fecha_fin">Fecha de Fin:</label>
        <input type="date" name="fecha_fin">
        
        <button type="submit">Añadir Curso</button>
    </form>
    
    <a href="index.php" class="btn">Volver a la página principal</a>
</body>
</html>
