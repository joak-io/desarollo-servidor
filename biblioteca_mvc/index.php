<?php

define("BASE_URL", "/biblioteca_mvc");
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Obtener la ruta solicitada, sin parámetros GET
$ruta = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// Eliminar la ruta base del proyecto
if ($ruta === BASE_URL) {
    $ruta = "/";
} elseif (strpos($ruta, BASE_URL . "/") === 0) {
    $ruta = substr($ruta, strlen(BASE_URL));
}

// Normalizar la ruta
if ($ruta === "") {
    $ruta = "/";
}

// Cargar el controlador
require_once "controllers/LibroController.php";

$controlador = new LibroController();

// Enrutamiento
switch ($ruta) {

    // Página de inicio
    case "/":
        require "views/home.php";
        break;

    // Listado de libros
    case "/libros":
        $controlador->listar();
        break;
    
    //Libro nuevo    
    case "/libros/nuevo":
        $controlador->nuevo();
        break;

    // Crear libro    
    case "/libros/crear":
        $controlador->crear();
        break;

    //Modificar un libro
    case "/libros/actualizar/":
        //$controlador->modificar();
        break;
    

        

   
    default:
        if(preg_match("#^/libro/([0-9]+)$#", $ruta, $coincidencias)){
            $controlador->detalle($coincidencias[1]);    
        }
        else if(preg_match("#^[0-9]+$#", $ruta, $coincidencias)){
            $controlador->editar($coincidencias[1]);
        }
        else{
		    http_response_code(404);
		    echo "Página no encontrada";
        }
}