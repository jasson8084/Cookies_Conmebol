<?php

    setcookie('conmebol', '', time() - 1, '/');
    header('Location:ubicacion.php');
    
include('conexionDB.php');

if (isset($_COOKIE['conmebol'])) {
    // Obtener el valor de la cookie y sanear los datos
    $valorCookie = mysqli_real_escape_string($conex, $_COOKIE['conmebol']);
    
    // Consulta para eliminar la cookie de la base de datos
    $sql = "DELETE FROM cookie WHERE nombre = ?";
    
    // Preparar la consulta
    $stmt = $conex->prepare($sql);
    
    // Vincular los parámetros
    $stmt->bind_param("s", $valorCookie);
    
    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Eliminar la cookie del lado del cliente
        setcookie("conmebol", "", time() - 1, "/");
        ?>
        <h3 class="ok">Cookie eliminada correctamente</h3>
        <?php
    } else {
        ?>
        <h3 class="bad">¡Ups, ha ocurrido un error al intentar eliminar la cookie!</h3>
        <?php
    }
    // Cerrar la declaración
    $stmt->close();
} 
// Cerrar la conexión a la base de datos
$conex->close();
?>