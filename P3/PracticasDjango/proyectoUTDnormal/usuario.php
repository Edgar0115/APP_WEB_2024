<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Iniciar Sesión | PHP Proyecto UTD
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
            <h1>Iniciar Sesión</h1>
            <hr>
            <form action="php/procesar_login.php" method="POST">
                <div>
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <br>
                <div>
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <br>
                <div>
                    <button type="submit">Iniciar Sesión</button>
                </div>
            </form>
        </div>
    </section>
    <footer>
        <p>Curso de PHP con UTD &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>

</html>
