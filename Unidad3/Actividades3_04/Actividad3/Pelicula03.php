<?php
class Pelicula {
    private string $titulo;
    private int $anio;
    private int $duracion;

    public const SEPARADOR = ";";

    public function __construct(string $titulo, int $anio, int $duracion) {
        $this->titulo = $titulo;
        $this->anio = $anio;
        $this->duracion = $duracion;
    }

    public function __get(string $nombrePropiedad): mixed {
        return $this->$nombrePropiedad;
    }

    public function mostrar(): void {
        echo "<li>{$this->titulo} - {$this->anio} - {$this->duracion} minutos</li>";
    }

    public function obtenerCadenaFichero(): string {
        return $this->titulo . self::SEPARADOR . $this->anio . self::SEPARADOR . $this->duracion . "\n";
    }

    public static function crearDesdeCadena(string $linea): Pelicula {
        $linea = trim($linea);
        $datos = explode(self::SEPARADOR, $linea);
        if (count($datos) < 3) {
            throw new Exception("Datos incompletos");
        }
        return new Pelicula(trim($datos[0]), (int)trim($datos[1]), (int)trim($datos[2]));
    }
}
?>