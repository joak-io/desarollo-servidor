<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - Listado de socios</title>
    <link rel="stylesheet" href="/biblioteca_mvc/css/estilos.css">
</head>
<body>
    <main class="contenedor">
        <header>
            <h1>Biblioteca</h1>
            <p>Todos los socios registrados</p>
        </header>
		
        <section>
            <h2>Listado de socios</h2>

            <?php if (count($socios) > 0) { ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo Electronico</th>
                            <th>Teléfono</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($socios as $socio) { ?>
                            <tr>
                                <td><?= htmlspecialchars((string)$socio->id) ?></td>
                                <td><?= htmlspecialchars($socio->nombre) ?></td>
                                <td><?= htmlspecialchars($socio->apellidos) ?></td>
                                <td><?= htmlspecialchars($socio->correo) ?></td>
                                <td><?= htmlspecialchars((string)$socio->telefono) ?></td>
                                <td>
									<a href="<?= BASE_URL ?>/socio/<?= $socio->id ?>">Ver</a>

									<a href="<?= BASE_URL ?>/socio/editar/<?= $socio->id ?>">Editar</a>

									<form action="<?= BASE_URL ?>/socio/eliminar/<?= $socio->id ?>"
										  method="POST"
										  style="display:inline;">
										<button type="submit">Eliminar</button>
									</form>
								</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <a href="<?= BASE_URL ?>/">Volver al Menú</a>
            <?php } else { ?>
                <p>No hay socios en la biblioteca.

                |
                <a href="<?= BASE_URL ?>/">Volver al Menú</a>
                </p>

            <?php } ?>
        </section>
    </main>
</body>
</html>
