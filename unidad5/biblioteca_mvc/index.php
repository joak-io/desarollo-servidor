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
require_once "controllers/SocioController.php";

$controlador = new LibroController();
$controladorSocios = new SocioController();

// Enrutamiento
switch ($ruta) {

    // Página de inicio
    case "/":
        require "views/home.php";
        break;

    //Libros
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

    //Buscar un libro
    case "/libros/buscar":
        $controlador->buscar();
        break;

    case "/libros/buscarLibro":
        $controlador->buscarLibro();
        break;
    
    // Socios
        case "/socios":
        $controladorSocios->listar();
        break;
    
    //socio nuevo    
    case "/socios/nuevo":
        $controladorSocios->nuevo();
        break;

    // Crear un socio     
    case "/socios/crear":
        $controladorSocios->crear();
        break;
        

    
        default:
        if(preg_match("#^/libro/([0-9]+)$#", $ruta, $coincidencias)){
            $controlador->detalle($coincidencias[1]);    
        }
        else if(preg_match("#^/libro/editar/([0-9]+)$#", $ruta, $coincidencias)){
            $controlador->editar($coincidencias[1]);
        }
        else if(preg_match("#^/libro/actualizar/([0-9]+)$#", $ruta, $coincidencias)){
            $controlador->actualizar($coincidencias[1]);
        }
        else if(preg_match("#^/libro/eliminar/([0-9]+)$#", $ruta, $coincidencias)){
            $controlador->eliminar($coincidencias[1]);
        }
        //SOCIOS
        else if(preg_match("#^/socio/([0-9]+)$#", $ruta, $coincidencias)){
            $controladorSocios->detalle($coincidencias[1]);    
        }
        /*else if(preg_match("#^/socio/editar/([0-9]+)$#", $ruta, $coincidencias)){
            $controladorSocios->editar($coincidencias[1]);
        }
        else if(preg_match("#^/socio/actualizar/([0-9]+)$#", $ruta, $coincidencias)){
            $controladorSocios->actualizar($coincidencias[1]);
        }
        else if(preg_match("#^/socio/eliminar/([0-9]+)$#", $ruta, $coincidencias)){
            $controladorSocios->eliminar($coincidencias[1]);
        }*/
        else{
		    http_response_code(404);
		    echo "Página no encontrada";
        }
}