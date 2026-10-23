<?php

function incrementarPrecio(&$productos){
    foreach ($productos as $producto => &$precio){
         $precio *= 1.05;
    }
}

function mostrarArray($productos){
    foreach ($productos as $producto => $precio){
        echo "$producto: " . sprintf("%.2f", $precio) . " €<br>";
    }
}


?>