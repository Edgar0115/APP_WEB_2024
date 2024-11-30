<?php
$host = "localhost"; // Cambia por tu host
$db = "bd_proyectoutd"; // Nombre de la base de datos
$user = "root"; // Usuario de la base de datos
$password = ""; // Contraseña de la base de datos

try {
    $conexion = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    die();
}
?>
