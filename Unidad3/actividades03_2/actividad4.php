<?php

function recibirDagno(&$vidaInicial, $dagno){
    $vidaInicial-=$dagno;

    
}

$vidaInicial = $_GET["vida"];
$dagno = $_GET["dagno"];


if(is_numeric($vidaInicial) && is_numeric($dagno)){
    echo"
    <h1>Estado del Personaje</h1>

    <p>Vida Inicial: $vidaInicial</p> ";
    recibirDagno($vidaInicial, $dagno);
    echo "
        <p>Daño Recibido: $dagno</p>
        <p>Vida de la variable inicial: $vidaInicial</p>
    ";

}
else{
    echo "<h1>Los Valores son inválidos</h1>";
};







?>