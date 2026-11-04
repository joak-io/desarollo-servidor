<?php

$producto = $_POST["productos"];
$accion = $_POST["accion"];

$productos=[
    "Portátil" => 800,
    "Monitor" => 200,
    "Teclado" => 40,
    "Raton" => 20,
    "Altavoces" => 35,
    "Webcam" => 50
];


session_start();
if(!isset($_SESSION["carrito"])){
    $_SESSION["carrito"]=[]; //un array que contiene el producto y la cantidad
    $_SESSION["accion"]=$accion;//si isseet session


    function addProducto($producto){
        $cantidad=0;
        if(isset($producto, $_SESSION["carrito"]) == false){
            $_SESSION["carrito"][$producto] = $cantidad++;
            echo "<p>Elemento añadido por primera vez al array</p>";
            echo $_SESSION["carrito"]["$producto"];
        }else if(in_array($producto, $_SESSION["carrito"])){
            $_SESSION["carrito"][$producto] = $cantidad++;
            echo "<p>El producto ya se encontraba. Se ha actualizado la cantidad $cantidad </p>";
        }
    }

    if($_SESSION["accion"]=="anade"){
        addProducto($producto);
    }
}