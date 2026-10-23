<?php

function convertir($distancia, $conversion){
    $resultado="";
    if($conversion==="Millas"){
        $resultado = $distancia * 0.621371;
    }
    else if ($conversion ==="Kilómetros"){
        $resultado = $distancia * 1.60934;
    }
    return $resultado;
}

function mostrarResultado($distancia, $conversion, $resultado){
    if($conversion==="Millas"){
        echo "
        <h1>Conversor de distancias </h1>"
        . sprintf("%.2f", $distancia) . " km --> ".
        sprintf("%.2f", $resultado) . " millas ";
    }
    else if($conversion === "Kilómetros"){
        echo "
        <h1>Conversor de distancias </h1> "
        . sprintf("%.2f", $distancia) . " millas --> ".
        sprintf("%.2f", $resultado) . " km";
    }
  
}


?>