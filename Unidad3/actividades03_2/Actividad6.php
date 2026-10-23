<?php

include("Funciones6.php");


$productos=[
    "Pan" => 1.2,
    "Leche" => 1.05,
    "Huevos" => 2.8,
    "Arroz" => 1.75,
    "Aceite" => 6.5,
    "Cafe" => 4.25
];


echo "
    <h1>Precios Iniciales</h1>";
    mostrarArray($productos);
echo" 
    <h1>Precios despues del incremento</h1>";
    incrementarPrecio($productos);
    mostrarArray($productos);

?>