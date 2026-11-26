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

        file_put_contents(
            self::FICHERO, 
            $texto, 
            FILE_APPEND
            );
    }

    //Modifica un libro
    public static function modificar($id, $libro) {
		$libros = self::listar();

		foreach ($libros as $i => $libroActual) {
			if ($libroActual->id == $id) {
				$libros[$i] = $libro;
				break;
			}
		}
		$contenido = "";

		foreach ($libros as $libroActual) {
			$contenido .= $libroActual->cadenaFichero(). PHP_EOL;
		}

		file_put_contents(self::FICHERO, $contenido);
	}


    // Elimina un libro.
    public static function eliminar($id)
    {
        $libros = self::listar();
        $contenido = "";
        $encontrado = false;

        foreach ($libros as $libro) {

            if ($libro->id == $id) {
                $encontrado = true;
            } else {
                $contenido .= $libro->cadenaFichero(). PHP_EOL;
            }
        }

        if ($encontrado) {
            file_put_contents(self::FICHERO, $contenido);
        }

        return $encontrado;
    }

    // Busca libros por título o autor.
    public static function buscar($texto){
        $resultado = [];
        $libros = self::listar();

        foreach ($libros as $libro) {
            if (stripos($libro->titulo, $texto) !== false ||
                stripos($libro->autor, $texto) !== false) {
                $resultado[] = $libro;
            }
        }
        return $resultado;
    }
	
	 public static function siguienteId() {

		$libros = self::listar();

		$mayor = 0;

		foreach ($libros as $libro) {

			if ($libro->id > $mayor) {
				$mayor = $libro->id;
			}
		}

		return $mayor + 1;
	}


}