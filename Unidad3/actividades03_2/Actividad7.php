<?php

$distancia = $_GET["distancia"];
$conversion = $_GET["conversion"];
$resultado = "";

include("Funciones7.php");

if (is_numeric($distancia)){
    $resultado=convertir($distancia, $conversion);
    mostrarResultado($distancia, $conversion, $resultado);
}
else{
    echo "Uno de los valores NO es válido. Intenta de nuevo";
};


?>