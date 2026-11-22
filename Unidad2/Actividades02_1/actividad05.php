<?php
$videojuego1="Super Mario Bros";
$videojuego2="The Legend of Zelda";
$videojuego3="Hogwarts Legacy";

$genero1="Plataformas";
$genero2="Aventura";

$plataforma1="Nintendo Switch";
$plataforma2="PS5";

$precio1=49.99;
$precio2=59.99;
$precio3=20;

echo "<h1>VIDEOJUEGOS</h1>
<table border=1 >
    <tr>
        <th>Videojuego</th>
        <th>Genero</th>
        <th>Plataforma</th>
        <th>Precio</th>
    </tr>

    <tr>
        <td>$videojuego1</td>
        <td>$genero1</td>
        <td>$plataforma1</td>
        <td>". sprintf("%.2f", $precio1) . "€ </td>
    </tr>

    <tr>
        <td>$videojuego2</td>
        <td>$genero1</td>
        <td>$plataforma1</td>
        <td>". sprintf("%.2f", $precio2) . "€ </td>
    </tr>

    <tr>
        <td>$videojuego3</td>
        <td>$genero2</td>
        <td>$plataforma2</td>
        <td>". sprintf("%.2f", $precio3) . "€ </td>
    </tr>

</table>";

?>