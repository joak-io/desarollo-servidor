<?php

require_once __DIR__ . "/Libro.php";

class AccesoLibro
{
    private const FICHERO = __DIR__ . "/../data/libros.txt";

    // Devuelve todos los libros.
    public static function listar()
    {
        $libros = [];

		//Lee el contenido completo de un fichero y lo almacena en un array
		//Ignora los santos de línea y las líneas vacías
        $lineas = file(self::FICHERO, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lineas as $linea) {
            $libros[] = new Libro($linea);
        }

        return $libros;
    }

    public static function buscarPorId($id)
    {
        $libros = self::listar();
        foreach ($libros as $libro){
            if ($libro ->id === $id){
                return $libro;
            }
        }
        return $libro;
    }
}