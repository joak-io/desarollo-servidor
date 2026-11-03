<?php
$jugador1="Mario";
$jugador2="Luigi";

$victoriasJug1=0;
$victoriasJug2=0;


echo "
<h1>Partida de Dados</h1>
<table border=1>
    <tr>
        <th>Ronda</th>
        <th>$jugador1</th>
        <th>$jugador2</th>
        <th>Resultado</th>
    </tr>
";


$ganador="";
for ($ronda=1; $ronda<6; $ronda++){
    $dado1= rand(1,6);
    $dado2= rand(1,6);

    if ($dado1>$dado2){
        $victoriasJug1++;
        $ganador= $jugador1;

    }
    else if ($dado2>$dado1){
        $victoriasJug2++;
         $ganador= $jugador2 ;
    }
    else{
        $ganador= "Empate ";
    }

    echo "
        <tr>
            <td>$ronda</td>
            <td>$dado1</td>
            <td>$dado2</td>
            <td>$ganador</td>
        </tr>
        
    ";
}

$ganadorPartida="";
if($victoriasJug1>$victoriasJug2){
    $ganadorPartida=$jugador1  . " gana la partida";
}
else if($victoriasJug2>$victoriasJug1){
    $ganadorPartida=$jugador2 . " gana la partida";
}
else{
    $ganadorPartida="Ambos han ganado la misma cantidad de rondas: Empate";
}


echo "</table>



<h2>Resultado Final</h2>
$jugador1: $victoriasJug1 partidas ganadas
<br>

$jugador2: $victoriasJug2 partidas ganadas


<h2>$ganadorPartida</h2>
";












?>