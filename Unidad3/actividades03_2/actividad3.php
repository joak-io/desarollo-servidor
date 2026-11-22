<?php

function recibirDagno($vidaInicial, $dagno){
    $vidaRestante = $vidaInicial - $dagno;

    return $vidaRestante;
}

$vidaInicial = $_GET["vida"];
$dagno = $_GET["dagno"];
$vidadevuelta= recibirDagno($vidaInicial, $dagno) ;

if(is_numeric($vidaInicial) && is_numeric($dagno)){
    echo"
    <h1>Estado del Personaje</h1>

    <p>Vida Inicial: $vidaInicial</p>
    <p>Dagno Recbido: $dagno</p>
    <p>Vida devuelta por la Función: $vidadevuelta</p>
    <p>Vida de la variable original: $vidaInicial</p>

";
}
else{
    echo "<h1>Los Valores son inválidos</h1>";
};







?>