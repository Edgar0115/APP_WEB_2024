<?php
session_start(); // Inicia la sesión para verificar si hay un usuario logueado
?>
<nav>
    <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="acercade.php">Acerca de</a></li>
        <?php if (isset($_SESSION['username'])): ?>
            <li><a href="Mision.php">Misión</a></li>
            <li><a href="vision.php">Visión</a></li>
            <li><a href="articulos.php">Artículos</a></li>
            <li><a href="categorias.php">Categorías</a></li>
            <li><a href="php/cerrar_sesion.php">Cerrar Sesión</a></li>
        <?php else: ?>
            <li><a href="registro.php">Registro</a></li>
            <li><a href="usuario.php">Iniciar Sesión</a></li>
        <?php endif; ?>
    </ul>
</nav>
