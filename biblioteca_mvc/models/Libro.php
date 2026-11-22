<?php

class Libro {

    private const SEPARADOR = ";";

    private $id;
    private $titulo;
    private $autor;
    private $anio;

    public function __construct($id, $titulo = null, $autor = null, $anio = null) {

        // Si solo recibe un parámetro, se interpreta como una línea del fichero
        if ($titulo === null) {

            $datos = explode(self::SEPARADOR, trim($id));

            $this->id = $datos[0];
            $this->titulo = $datos[1];
            $this->autor = $datos[2];
            $this->anio = $datos[3];

        } else {

            // Si recibe cuatro parámetros, se asignan directamente
            $this->id = $id;
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->anio = $anio;
        }
    }

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad=$valor;
    }

    public function __toString() {
        return $this->titulo . " (" . $this->anio . ")";
    }
}