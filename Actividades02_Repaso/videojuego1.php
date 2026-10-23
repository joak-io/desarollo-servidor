<?php


$nombre="Zenless Zone Zero";
$plataforma="PC y Consolas";
$genero="ARPG";
$anio="2024";
$precio="0";
$ud_disps="Unlimited";
$imagen="img/zzz.png";

echo"
<h1>$nombre</h1>
<img alt='imagen del juego' src='$imagen' width=500px/>
<ul>
    <li>Plataforma: $plataforma </li>
    <li>Género: $genero </li>
    <li>Año de publicacion: $anio </li>
    <li>Precio: " . sprintf("%.2f", $precio) ."€ </li>
    <li>Unidades disponibles: $ud_disps</li>
</ul>

<p> <a href='index.php'>Vuelve a la pagina principal</a></p>
<p> <a href='https://zenless.hoyoverse.com/es-es/main'>Visita la pagina oficial del videojuego</a></p>


";

?>