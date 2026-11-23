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

    public static function insertar($libro){ 
        $lista = self::listar();
        $maxId = 0;
        foreach ($lista as $item) {
            if ($item->id > $maxId) {
                $maxId = $item->id;
                }  
        }
        $libro->id = $maxId + 1;

        $texto=implode(";", [
            $libro->id, $libro->titulo,  //El implode es lo contrario al explode. Une los elementos d eun array 
            $libro->autor,$libro->anio  // en un string usando un separador
            ]);
        $texto.=PHP_EOL;

        file_put_contents(self::FICHERO, $texto, FILE_APPEND);
    }

    public static function modificar($id, $libro){
        if(self::buscarPorId($id)->id == $libro->id){
            

        }
    }


}