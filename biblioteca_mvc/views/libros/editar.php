<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar el libro</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/estilos.css">
</head>
<body>

    <header class="cabecera">
        <div class="contenedor">
             <h1>Biblioteca</h1>
            <p>Editar el libro</p>
        </div>
    </header>

    <main class="contenedor principal">
        <form action="<?= BASE_URL ?>/libros/actualizar"
										  method="POST">

            <h2><?= htmlspecialchars($libro->titulo) ?></h2>

            <p><strong>Identificador:</strong>
                <textarea readonly>
                    <?= htmlspecialchars($libro->id) ?> 
                </textarea>
            </p>

            <p><strong>Título:</strong>
                <label>Titulo</label><br>
                <input type="text" 
                    value="<?= htmlspecialchars($libro->titulo) ?>" 
                    name="titulo"><br><br>

            </p>


            <p><strong>Autor:</strong>
                <label>Autor</label><br>
                <input type="text" 
                    value="<?= htmlspecialchars($libro->autor) ?>" 
                    name="autor"><br><br>

            </p>

            <p><strong>Año de publicación:</strong>
                <label>Año de publicacion</label><br>
                <input type="number" 
                    value="<?= htmlspecialchars($libro->anio) ?>"
                    name="anio"><br><br>
            </p>

            <p>
                <a href="<?= BASE_URL ?>/libros">Volver al listado</a>
                |
                <a href="<?= BASE_URL ?>/">Inicio</a>
            </p>
        </form>

    </main>

</body>
</html>