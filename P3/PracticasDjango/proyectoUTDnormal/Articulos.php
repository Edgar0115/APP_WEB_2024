<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Artículos | PHP Proyecto UTD
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
            <h1>Artículos</h1>
            <hr>

            <!-- Mostrar artículos desde la base de datos -->
            <?php
            require 'php/conexion.php'; // Conexión a la base de datos

            try {
                // Consulta a la base de datos con INNER JOIN
                $sql = "SELECT articulos.descripcion, articulos.foto, categorias.descripcion AS categoria
                        FROM articulos
                        INNER JOIN categorias ON articulos.id_categoria = categorias.id";
                $stmt = $conexion->query($sql);
                $articulos = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // Mostrar los artículos
                if ($articulos) {
                    echo "<ul>";
                    foreach ($articulos as $articulo) {
                        echo "<li>";
                        echo "<strong>Categoría:</strong> " . htmlspecialchars($articulo['categoria']) . "<br>";
                        echo "<strong>Descripción:</strong> " . htmlspecialchars($articulo['descripcion']) . "<br>";
                        if (!empty($articulo['foto'])) {
                            echo "<img src='img/" . htmlspecialchars($articulo['foto']) . "' alt='Imagen del artículo' width='200'><br>";
                        } else {
                            echo "<p>Sin imagen disponible.</p>";
                        }
                        echo "</li><br>";
                    }
                    echo "</ul>";
                } else {
                    echo "<p>No se encontraron artículos.</p>";
                }
            } catch (PDOException $e) {
                echo "<p>Error al consultar los artículos: " . $e->getMessage() . "</p>";
            }
            ?>
       </div>
    </section>
    <footer>
        <p>Curso de PHP con UTD &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>
</html>
