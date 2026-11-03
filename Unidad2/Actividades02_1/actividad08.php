<?php

$producto="Teclado Mecánico";
$precio_inicial=79.99;
$descuento=15;
$importe_descuento=($precio_inicial*$descuento)/100;
$precio_final=$precio_inicial-$importe_descuento;


echo"
    <h1>Oferta</h1>
    <h2>$producto</h2>
    <p> 
    Precio Original: $precio_inicial <br>
    Descuento: " . sprintf("%.2f", $descuento) . "% <br>"
    . " Importe del descuento  " . sprintf("%.2f", $importe_descuento) . "€ </p>"
    . "<strong>Precio Final:  " . sprintf("%.2f", $precio_final) . "€ </strong> "
;
?>