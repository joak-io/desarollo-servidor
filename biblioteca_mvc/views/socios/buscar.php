<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del socio</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/estilos.css">
</head>
<body>

    <header class="cabecera">
        <div class="contenedor">
             <h1>Biblioteca</h1>
            <p>Busqueda del socio</p>
        </div>
    </header>

    <main class="contenedor principal">

        <form action="<?= BASE_URL ?>/socios/buscarSocio"
										  method="GET">
            <label>Introduce nombre o apellido del socio:</label>
                <input type="text" name="texto" id="texto">

            <button type="submit">Buscar</button>

        </form>

        <p>
            <a href="<?= BASE_URL ?>/socios">Volver al listado</a>
            |
            <a href="<?= BASE_URL ?>/">Inicio</a>
            |
            <a href="<?= BASE_URL ?>/">Volver al Menú</a>
        </p>

    </main>

</body>
</html>