<?php
require 'conexion.php'; // Conexión en la misma carpeta (php)

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    // Verificar si las contraseñas coinciden
    if ($password !== $password_confirm) {
        echo "<script>alert('Las contraseñas no coinciden.');</script>";
        exit;
    }

    // Encriptar la contraseña
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    try {
        // Insertar datos en la tabla usuarios
        $sql = "INSERT INTO usuarios (username, password) VALUES (:username, :password)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password_hash);
        $stmt->execute();

        // Ventana emergente y redirección al inicio de sesión
        echo "<script>
                alert('Registro exitoso. Por favor, inicie sesión.');
                window.location.href = '../usuario.php'; 
              </script>";
        exit;
    } catch (PDOException $e) {
        echo "<script>alert('Error al registrar usuario: " . $e->getMessage() . "');</script>";
    }
}
?>

