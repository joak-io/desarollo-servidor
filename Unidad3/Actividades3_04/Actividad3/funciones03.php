<?php
require_once "Pelicula03.php";

class DatoInvalidoException extends Exception {
}

function guardarPeliculas(array $peliculas, string $fichero): void {
    $contenido = "";
    foreach ($peliculas as $pelicula) {
        $contenido .= $pelicula->obtenerCadenaFichero();
    }
    if (file_put_contents($fichero, $contenido) === false) {
        throw new DatoInvalidoException("No se puede escribir en el fichero de películas");
    }
}

function leerPeliculas(string $fichero): array {
    $peliculas = [];
    $archivo = fopen($fichero, "r");
    if ($archivo === false) {
        throw new DatoInvalidoException("No se puede abrir el fichero de películas");
    }
    while (($linea = fgets($archivo)) !== false) {
        $linea = trim($linea);
        if (!empty($linea)) {
            $datos = explode(Pelicula::SEPARADOR, $linea);
            if (count($datos) !== 3) {
                throw new DatoInvalidoException("La línea no contiene exactamente tres datos.");
            }
            $titulo = trim($datos[0]);
            $anio = trim($datos[1]);
            $duracion = trim($datos[2]);

            if (!is_numeric($anio) || !is_numeric($duracion) || (int)$anio <= 0 || (int)$duracion <= 0) {
                throw new DatoInvalidoException("El año de estreno o la duración no son válidos.");
            }

            $peliculas[] = new Pelicula($titulo, (int)$anio, (int)$duracion);
        }
    }
    fclose($archivo);
    return $peliculas;
}

function mostrarPeliculas(array $peliculas): void {
    echo "<ul>";
    foreach ($peliculas as $pelicula) {
        $pelicula->mostrar();
    }
    echo "</ul>";
}
?>