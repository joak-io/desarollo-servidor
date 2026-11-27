<?php

class Socio {

    private const SEPARADOR = ";";

    private $id;
    private $nombre;
    private $apellidos;
    private $correo;
    private $telefono;

    public function __construct($id, $nombre = null, $apellidos = null, $correo = null, $telefono=null) {

        // Si solo recibe un parámetro, se interpreta como una línea del fichero
        if ($nombre === null) {

            $datos = explode(self::SEPARADOR, trim($id));

            $this->id = $datos[0];
            $this->nombre = $datos[1];
            $this->apellidos = $datos[2];
            $this->correo = $datos[3];
            $this->telefono = $datos[4];

        } else {

            // Si recibe 5 parámetros, se asignan directamente
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->correo = $correo;
            $this->telefono = $telefono;
        }
    }

    public function __get($propiedad) {
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor) {
        $this->$propiedad=$valor;
    }

    public function __toString() {
        return $this->nombre . " " . $this->apellidos . "";
    }

    public function cadenaFichero(){
        return $this->id . self::SEPARADOR .
        $this->nombre . self::SEPARADOR .
        $this->apellidos . self::SEPARADOR .
        $this->correo . self::SEPARADOR .
        $this->telefono;
    }


}