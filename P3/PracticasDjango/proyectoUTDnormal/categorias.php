<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Categorías | PHP Proyecto UTD
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
            <h1>Categorías</h1>
            <hr>

            <!-- Mostrar categorías desde la base de datos -->
            <?php
            require 'php/conexion.php'; // Conexión a la base de datos

            try {
                // Consulta a la base de datos
                $sql = "SELECT id, descripcion FROM categorias";
                $stmt = $conexion->query($sql);
                $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // Mostrar las categorías
                if ($categorias) {
                    echo "<ul>";
                    foreach ($categorias as $categoria) {
                        echo "<li>ID: " . htmlspecialchars($categoria['id']) . " - " . htmlspecialchars($categoria['descripcion']) . "</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>No se encontraron categorías.</p>";
                }
            } catch (PDOException $e) {
                echo "<p>Error al consultar las categorías: " . $e->getMessage() . "</p>";
            }
            ?>
       </div>
    </section>
    <footer>
        <p>Curso de PHP con UTD &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>
</html>
