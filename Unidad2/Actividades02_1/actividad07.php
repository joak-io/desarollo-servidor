<?php

$producto="Videojuego de Aventuras";
$precio=39.99;
$cantidad=2;
$precio_total=$precio*$cantidad;

echo"<h1>Compra</h1>
    <h2>$producto</h2> "
    . "<p>Precio unitario:  $precio </p>"
    . "<p>Cantidad:  $cantidad </p>"
    . "<p>Precio total: " 
    . sprintf("%.2f", $precio_total) . "€ </p>"
    ;
?>