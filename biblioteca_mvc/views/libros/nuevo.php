<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anade Libro</title>
</head>
<body>

    <header class="cabecera">
        <div class="contenedor">
             <h1>Biblioteca</h1>
            <p>Nuevo libro</p>
        </div>
    </header>
    
    <main class="contenedor principal">
    <form action="<?= BASE_URL ?>/libro/eliminar/<?= $libro->id ?>"
										  method="POST"
										  style="display:inline;">
        <label>Titulo</label><br>
            <input type="text" name="titulo"><br><br>

        <label>Autor</label><br>
            <input type="text" name="autor"><br><br>
        
        <label>Año de Publicacion: </label><br>
            <input type="number" name="anio"><br><br>

        <button type="submit" name="anade">Añadir</button>
    </form>

    </main>
</body>
</html>