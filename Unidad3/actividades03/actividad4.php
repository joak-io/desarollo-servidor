<?php

/* Crea un array asociativo donde la clave sea el nombre del jugador y 
el valor sea su puntuación.

Incluye al menos 6 jugadores y genera de forma aleatoria sus puntuaciones con valores entre 0 y 1000
(rand(0,1000)).*/

$jugadores =[
    "Link" => (rand(0,1000)),
    "Luigi" => (rand(0,1000)),
    "Toad" => (rand(0,1000)),
    "Bowser" => (rand(0,1000)),
    "Mario" => (rand(0,1000)),
    "Peach" => (rand(0,1000)),
    "Lisa Simpson" => (rand(0,1000))
];

/* Muestra los jugadores en una lista ordenada por puntuación de 
forma descendente, colocando en primer lugar al jugador 
con mayor puntuación. 
Para cada elemento, muestra nombre y puntuación obtenida*/

arsort($jugadores);
$totalPuntos=0;
$jugadoresmas500=0; 
$jugadoresMenos250=0;

echo"
    <h1>Rankings</h1>
        <ol>";
    foreach($jugadores as $jugador => $puntos){
        echo "<li>$jugador - $puntos puntos</li>";
        $totalPuntos += $puntos;
        if($puntos <250){
            $jugadoresMenos250++;
        }
        if($puntos>500){
            $jugadoresmas500++;
        }
    }
echo"   
    </ol>

";

$totalJugadores=count($jugadores);
$puntuacionMedia= ($totalPuntos / $totalJugadores);

$puntMax=max($jugadores);
$puntMin=min($jugadores);





echo "
    <h1>Estadísticas</h1>

    <p>Total jugadores: $totalJugadores</p>
    <p>Total Puntos: $totalPuntos</p>
    <p>Puntuacion Media: " . sprintf("%.2f", $puntuacionMedia) . "</p>
    <p>Jugadores con mas de 500 puntos: $jugadoresmas500</p>
    <p>Jugadores con menos de 250 puntos: $jugadoresMenos250</p>
    <p>Puntuacion Máxima: $puntMax</p>
    <p>Puntuacion Mínima: $puntMin</p>

"


?>