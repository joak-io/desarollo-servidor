<?php

require_once __DIR__ . "/Socio.php";

class AccesoSocio
{
    private const FICHERO = __DIR__ . "/../data/socios.txt";

    // Devuelve todos los libros.
    public static function listar()
    {
        $socios = [];

		//Lee el contenido completo de un fichero y lo almacena en un array
		//Ignora los santos de línea y las líneas vacías
        $lineas = file(self::FICHERO, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lineas as $linea) {
            $socios[] = new Socio($linea);
        }

        return $socios;
    }

    public static function buscarPorId($id)
    {
        $socios = self::listar();
        foreach ($socios as $socio){
            if ($socio ->id === $id){
                return $socio;
            }
        }
        return $socio;
    }

    public static function insertar($socio){ 
        $lista = self::listar();
        $maxId = 0;
        foreach ($lista as $item) {
            if ($item->id > $maxId) {
                $maxId = $item->id;
                }  
        }
        $socio->id = $maxId + 1;

        $texto=implode(";", [
            $socio->id, $socio->nombre,  //El implode es lo contrario al explode. Une los elementos d eun array 
            $socio->apellidos, $socio->correo,  // en un string usando un separador
            $socio->telefono
        ]);
        $texto.=PHP_EOL;

        file_put_contents(
            self::FICHERO, 
            $texto, 
            FILE_APPEND
            );
    }

    //Modifica un socio
    public static function modificar($id, $socio) {
        $socios = self::listar();

		foreach ($socios as $i => $socioActual) {
			if ($socioActual->id == $id) {
				$socios[$i] = $socio;
				break;
			}
		}
		$contenido = "";

		foreach ($socios as $socioActual) {
			$contenido .= $socioActual->cadenaFichero(). PHP_EOL;
		}

		file_put_contents(self::FICHERO, $contenido);
	}


    // Elimina un libro.
    public static function eliminar($id){
        $socios = self::listar();
        $contenido = "";
        $encontrado = false;

        foreach ($socios as $socio) {

            if ($socio->id == $id) {
                $encontrado = true;
            } else {
                $contenido .= $socio->cadenaFichero(). PHP_EOL;
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
        $socios = self::listar();

        foreach ($socios as $socio) {
            if (stripos($socio->nombre, $texto) !== false ||
                stripos($socio->apellidos, $texto) !== false) {
                $resultado[] = $socio;
            }
        }
        return $resultado;
    }
	
	 public static function siguienteId() {

		$socios = self::listar();

		$mayor = 0;

		foreach ($socios as $socio) {

			if ($socio->id > $mayor) {
				$mayor = $socio->id;
			}
		}

		return $mayor + 1;
	}


}