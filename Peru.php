<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Peru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilos/mensajes.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="img/PER.png" alt="Logo" height="50">
        </a>
    </nav>
</header>
<div class="container mt-5">
    <h1 class="display-4 text-center mb-4">Bienvenido a la Federación Peruana de Fútbol</h1>
    <a href="borrarCookie.php" class="btn btn-danger">Borrar</a>
</div>
<?php
    
    include('conexionDB.php');
    
    if (isset($_COOKIE['conmebol'])) {
        // Obtener el valor de la cookie
        $valorCookie = $_COOKIE['conmebol'];
        $fechareg = date("d/m/y");
        // Consulta para insertar el valor en la base de datos
        $sql = "INSERT INTO cookie (nombre, fecha) VALUES ('$valorCookie', '$fechareg')";
        // Ejecutar la consulta
        if ($conex->query($sql) === TRUE) {
            ?>
            <h3 class="ok">Cookie almacenada correctamente</h3>
            <?php
        } else {
            ?>
            <h3 class="bad">¡Ups ha ocurriod un error!</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="bad">La cookie 'conmebol' no esta presente</h3>
        <?php
    }
    // Cerrar la conexión a la base de datos
    $conex->close();
?>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
