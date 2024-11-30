<?php
// Iniciar sesión para asegurarse de que se pueda destruir
session_start();

// Verificar si hay una sesión activa
if (isset($_SESSION['username'])) {
    // Destruir las variables de sesión
    session_unset();

    // Destruir la sesión completamente
    session_destroy();

    // Mostrar un mensaje emergente y redirigir al formulario de inicio de sesión
    echo "<script>
            alert('Has cerrado sesión exitosamente.');
            window.location.href = '../usuario.php';
          </script>";
    exit;
} else {
    // Si no hay sesión activa, redirigir directamente al formulario de inicio de sesión
    header("Location: ../usuario.html");
    exit;
}
?>
