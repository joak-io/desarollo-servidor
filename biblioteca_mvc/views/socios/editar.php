<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar el socio</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/estilos.css">
</head>
<body>

    <header class="cabecera">
        <div class="contenedor">
             <h1>Biblioteca</h1>
            <p>Editar el socio</p>
        </div>
    </header>

    <main class="contenedor principal">
        <form action="<?= BASE_URL ?>/socio/actualizar/<?= $socio->id ?>"
										  method="POST">

            <h2><?= htmlspecialchars($socio->nombre) ?></h2>

            <p><strong>Identificador:</strong><br>
                <input type="text" name="id" id="id" readonly value=<?= $id ?>>
            </p>

            <p><strong>Nombre:</strong>
                <input type="text" 
                    value="<?= htmlspecialchars($socio->nombre) ?>" 
                    name="nombre"><br><br>

            </p>


            <p><strong>Apellidos:</strong>
                <input type="text" 
                    value="<?= htmlspecialchars($socio->apellidos) ?>" 
                    name="apellidos"><br><br>

            </p>

            <p><strong>Correo electrónico:</strong>
                <input type="email" 
                    value="<?= htmlspecialchars($socio->correo) ?>"
                    name="correo"><br><br>
            </p>

            <p><strong>Nº de teléfono:</strong>
                <input type="tel" 
                    value="<?= htmlspecialchars($socio->telefono) ?>"
                    name="telefono"><br><br>
            </p>

            <p>
                <a href="<?= BASE_URL ?>/socios">Volver al listado</a>
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