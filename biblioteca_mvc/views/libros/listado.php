<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - Listado de libros</title>
    <link rel="stylesheet" href="/biblioteca_mvc/css/estilos.css">
</head>
<body>
    <main class="contenedor">
        <header>
            <h1>Biblioteca</h1>
            <p>Catálogo de libros disponibles</p>
        </header>
		
        <section>
            <h2>Listado de libros</h2>

            <?php if (count($libros) > 0) { ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Año</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($libros as $libro) { ?>
                            <tr>
                                <td><?= htmlspecialchars((string)$libro->id) ?></td>
                                <td><?= htmlspecialchars($libro->titulo) ?></td>
                                <td><?= htmlspecialchars($libro->autor) ?></td>
                                <td><?= htmlspecialchars((string)$libro->anio) ?></td>
                                <td>
									<a href="<?= BASE_URL ?>/libros/<?= $libro->id ?>">Ver</a>

									<a href="<?= BASE_URL ?>/libros/editar/<?= $libro->id ?>">Editar</a>

									<form action="<?= BASE_URL ?>/libros/eliminar/<?= $libro->id ?>"
										  method="POST"
										  style="display:inline;">
										<button type="submit">Eliminar</button>
									</form>
								</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } else { ?>
                <p>No hay libros en la biblioteca.</p>
            <?php } ?>
        </section>
    </main>
</body>
</html>
