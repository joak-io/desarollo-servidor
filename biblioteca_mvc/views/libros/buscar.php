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
            <p>Busqueda del libro</p>
        </div>
    </header>

    <main class="contenedor principal">

        <form action="<?= BASE_URL ?>/libros/buscarLibro"
										  method="GET">
            <label>Introduce el campo del libro:</label>
                <input type="text" name="texto" id="texto">

            <button type="submit">Buscar</button>

        </form>

        <p>
            <a href="<?= BASE_URL ?>/libros">Volver al listado</a>
            |
            <a href="<?= BASE_URL ?>/">Inicio</a>
            |
            <a href="<?= BASE_URL ?>/">Volver al Menú</a>
        </p>

    </main>

</body>
</html>