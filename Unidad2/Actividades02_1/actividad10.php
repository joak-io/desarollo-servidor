<?php

$nombre="The Legend of Zelda";
$ruta="img/zelda.webp";
$descripcion="Videojuego de aventura y exploración de mundo abierto";
$genero="Aventura";
$plataforma="Nintendo Switch";
$num_jugadores="1";
$precio=59.99;
$descuento=15;
$precio_final=($precio*$descuento)/100;


echo"
<h1>$nombre</h1>
<img alt='Imagen del videojuego' src='$ruta' width='500px'/>
<p>$descripcion</p>

<h2>Características</h2>
<ul>
    <li>Genero: $genero</li>
    <li>Plataforma: $plataforma</li>
    <li>Jugadores: $num_jugadores</li>
</ul>

<h2>Precio</h2>

<table border=1>
    <tr>
        <th>Precio</th>
        <th>Descuento</th>
        <th>Precio Final</th>
    </tr>

    <tr>
        <td>" . sprintf("%.2f", $precio) ."€ </td>
        <td>" . sprintf("%.2f", $descuento) ."€ </td>
        <td>" . sprintf("%.2f", $precio_final) ."€ </td>
    </tr>

</table>
";

?>