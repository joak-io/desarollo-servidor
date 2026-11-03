<?php

$producto = $_POST["productos"];
$accion = $_POST["accion"];

session_start();
    $_SESSION["carrito"]=[];
    $_SESSION["accion"]=$accion;

    
