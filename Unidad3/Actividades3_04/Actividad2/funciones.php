<?php

require_once("Producto.php");

function guardarProductos($productos){
    $fichero = fopen("Productos.txt", "a");

    try{
        foreach ($productos as $producto ){
            fwrite($fichero, $producto->obtenerCadenaFichero() . "\n");
        }
    }
    catch(Exception $e)     {
        echo "Error: " . $e->getMessage();
    }    
    fclose($fichero);
}

function leerProductos(){
    if(!file_exists("Productos.txt")){
        return[];
    }
    
    $fichero = fopen("Productos.txt", "r");
    $arrayLeidos=[];    
    try{
        while (($linea = fgets($fichero)) !== false){
            $arrayLeidos[] = Producto::crearDesdeCadena($linea);
        }

    }catch(Exception $e)     {
        echo "Error: " + $e->getMessage();
    }    
    fclose($fichero);
    return $arrayLeidos;
}

?>