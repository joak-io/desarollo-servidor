<?php

require_once __DIR__ . "/../models/Libro.php";
require_once __DIR__ . "/../models/AccesoLibro.php";

class LibroController {

    // Mostrar el listado de libros
    public function listar() {

        $libros = AccesoLibro::listar();

        require __DIR__ . "/../views/libros/listado.php";
    }

}
