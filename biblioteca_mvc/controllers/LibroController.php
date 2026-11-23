<?php

require_once __DIR__ . "/../models/Libro.php";
require_once __DIR__ . "/../models/AccesoLibro.php";

class LibroController {

    // Mostrar el listado de libros
    public function listar() {

        $libros = AccesoLibro::listar();

        require __DIR__ . "/../views/libros/listado.php";
    }

    public function detalle($id){
        $libro = AccesoLibro::buscarPorId($id);
        if( $libro !== null){
            require __DIR__ . "/../views/libros/detalle.php";
        } 
    }

    public function nuevo(){
        require __DIR__ . "/../views/libros/nuevo.php";
    }

    public function crear(){
        if(!empty($_POST["titulo"]) && 
            !empty($_POST["autor"]) && 
            !empty($_POST["anio"])){

            $titulo = $_POST["titulo"];
            $autor = $_POST["autor"];
            $publicacion = $_POST["anio"];

            $libroNuevo = new Libro(0, $titulo, $autor, $publicacion);

            AccesoLibro::insertar($libroNuevo);
            header('Location: ' . BASE_URL . '/libros' );
            exit;
        }
    }

    //Editar un libro (Activididad 3)
   public function editar($id){
        $libro = AccesoLibro::buscarPorId($id);
        if( $libro !== null){
            require __DIR__ . "/../views/libros/editar.php";
        } 
    }

    public function actualizar($id){
        //Como el crear con post
         if(
            !empty($_POST["titulo"]) && 
            !empty($_POST["autor"]) && 
            !empty($_POST["anio"])){


            $titulo = $_POST["titulo"];
            $autor = $_POST["autor"];
            $publicacion = $_POST["anio"];

        }
    }
    
}
