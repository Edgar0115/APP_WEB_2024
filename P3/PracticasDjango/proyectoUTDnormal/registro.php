<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Registrarse | PHP Proyecto UTD
    </title>
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>

<body>
    <header>
        <div id="logotipo">
            <img src="img/logophp.png" alt="Imagen PHP" title="PHP">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>

    <!-- Menú dinámico -->
    <?php include 'php/menu.php'; ?>

    <section id="content">
        <div class="box">
            <h1>Registrarse</h1>
            <h1>Registro de Usuario</h1>
            <form action="php/registro_usuario.php" method="POST">
                <label for="username">Nombre de usuario:</label>
                <input type="text" id="username" name="username" maxlength="60" required>
                <br><br>
        
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" maxlength="100" required>
                <br><br>
        
                <label for="password_confirm">Repetir Contraseña:</label>
                <input type="password" id="password_confirm" name="password_confirm" maxlength="100" required>
                <br><br>
        
                <button type="submit">Registrar</button>
            </form>
        </div>
    </section>
    <footer>
        <p>Curso de PHP con UTD &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>

</html>
