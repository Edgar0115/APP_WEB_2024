<?php
require 'conexion.php'; // Asegúrate de que la ruta sea correcta

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        // Verificar si el usuario existe en la base de datos
        $sql = "SELECT * FROM usuarios WHERE username = :username";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Iniciar sesión y guardar el nombre de usuario
            session_start();
            $_SESSION['username'] = $user['username'];

            // Redirigir al index
            header("Location: ../index.php");
            exit;
        } else {
            // Si el usuario o contraseña no son correctos
            echo "<script>
                    alert('Usuario o contraseña incorrectos.');
                    window.location.href = '../usuario.';
                  </script>";
        }
    } catch (PDOException $e) {
        echo "<script>alert('Error al iniciar sesión: " . $e->getMessage() . "');</script>";
    }
}
?>
