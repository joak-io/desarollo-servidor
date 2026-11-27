<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anade Socio</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/estilos.css">
</head>
<body>

    <header class="cabecera">
        <div class="contenedor">
             <h1>Biblioteca</h1>
            <p>Nuevo Socio</p>
        </div>
    </header>
    
    <main class="contenedor principal">
    <form action="<?= BASE_URL ?>/socios/crear"
										  method="POST">
        <label>Nombre</label><br>
            <input type="text" name="nombre"><br><br>

        <label>Apellidos</label><br>
            <input type="text" name="apellidos"><br><br>
        
        <label>Correo electronico: </label><br>
            <input type="email" name="correo"><br><br>

        <label>Teléfono:</label><br>
            <input type="tel" name="telefono"><br><br>

        <button type="submit" name="agrega">Agregar Socio</button>
    </form>
    <a href="<?= BASE_URL ?>/">Volver al Menú</a>

    </main>
</body>
</html>