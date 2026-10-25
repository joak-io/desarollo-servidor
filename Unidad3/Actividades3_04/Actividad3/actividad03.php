<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad 3</title>
</head>
<body>
    <h1>Catálogo de películas</h1>
    <?php
    require_once "funciones03.php";

    $fichero = "peliculas03.txt";

    try {
        $peliculasIniciales = [
            new Pelicula("Origen", 2010, 148),
            new Pelicula("Matrix", 1999, 136),
            new Pelicula("Interstellar", 2014, 169),
            new Pelicula("Gladiator", 2000, 155),
            new Pelicula("Los Vengadores", 2012, 143),
            new Pelicula("Avatar", 2009, 162)
        ];

        guardarPeliculas($peliculasIniciales, $fichero);

        $peliculasRecuperadas = leerPeliculas($fichero);

        mostrarPeliculas($peliculasRecuperadas);

        $numPeliculas = count($peliculasRecuperadas);
        $sumaDuracion = 0;
        $peliculaMayor = null;
        $maxDuracion = -1;

        foreach ($peliculasRecuperadas as $pelicula) {
            $sumaDuracion += $pelicula->duracion;
            if ($pelicula->duracion > $maxDuracion) {
                $maxDuracion = $pelicula->duracion;
                $peliculaMayor = $pelicula;
            }
        }

        $duracionMedia = $numPeliculas > 0 ? ($sumaDuracion / $numPeliculas) : 0;

        echo "<h2>Estadísticas</h2>";
        echo "<p>Número de películas: {$numPeliculas}</p>";
        echo "<p>Duración media: " . number_format($duracionMedia, 2) . " minutos</p>";
        if ($peliculaMayor) {
            echo "<p>Película de mayor duración: {$peliculaMayor->titulo} ({$peliculaMayor->duracion} minutos)</p>";
        }

        echo "<p>Proceso de gestión de películas finalizado.</p>";

    } catch (DatoInvalidoException $e) {
        echo "<p>Error de datos: " . $e->getMessage() . "</p>";
    } catch (Exception $e) {
        echo "<p>Error general: " . $e->getMessage() . "</p>";
    }
    ?>
</body>
</html>