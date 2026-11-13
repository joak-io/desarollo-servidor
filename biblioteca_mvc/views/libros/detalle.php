<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del libro</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/estilos.css">
</head>
<body>

    <header class="cabecera">
        <div class="contenedor">
             <h1>Biblioteca</h1>
            <p>Detalles del libro</p>
        </div>
    </header>

    <main class="contenedor principal">

        <h2><?= htmlspecialchars($libro->titulo) ?></h2>

        <p><strong>Identificador:</strong>
            <?= htmlspecialchars($libro->id) ?>
        </p>

        <p><strong>Título:</strong>
            <?= htmlspecialchars($libro->titulo) ?>
        </p>

        <p><strong>Autor:</strong>
            <?= htmlspecialchars($libro->autor) ?>
        </p>

        <p><strong>Año de publicación:</strong>
            <?= htmlspecialchars($libro->anio) ?>
        </p>

        <p>
            <a href="<?= BASE_URL ?>/libros">Volver al listado</a>
            |
            <a href="<?= BASE_URL ?>/">Inicio</a>
        </p>

    </main>

</body>
</html>