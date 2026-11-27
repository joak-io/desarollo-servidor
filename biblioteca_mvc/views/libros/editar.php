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
        <form action="<?= BASE_URL ?>/libro/actualizar/<?= $libro->id ?>"
										  method="POST">

            <h2><?= htmlspecialchars($libro->titulo) ?></h2>

            <p><strong>Identificador:</strong><br>
                <input type="text" name="id" id="id" readonly value=<?= $id ?>>
            </p>

            <p><strong>Título:</strong>
                <input type="text" 
                    value="<?= htmlspecialchars($libro->titulo) ?>" 
                    name="titulo"><br><br>

            </p>


            <p><strong>Autor:</strong>
                <input type="text" 
                    value="<?= htmlspecialchars($libro->autor) ?>" 
                    name="autor"><br><br>

            </p>

            <p><strong>Año de publicación:</strong>
                <input type="number" 
                    value="<?= htmlspecialchars($libro->anio) ?>"
                    name="anio"><br><br>
            </p>

            <p>
                <a href="<?= BASE_URL ?>/libros">Volver al listado</a>
                |
                <a href="<?= BASE_URL ?>/">Inicio</a>
                |
                <a href="<?= BASE_URL ?>/">Volver al Menú</a>
            </p>

            <button type="submit">Actualizar</button>
        </form>
        
    </main>

</body>
</html>