<?php

$titulo="Harry Potter y la piedra Filosofal";
$autor="J.K Rowling";
$anio_pub="1997";
$genero="Fantasía";
$num_paginas=320;
$precio=18.95;



echo"
<h1>Información del libro</h1>
<h2>$titulo</h2>
<ul>
    <li><strong>Autor: </strong> $autor</li>
    <li><strong>Año de publicación: </strong> $anio_pub</li>
    <li><strong>Género: </strong> $genero</li>
    <li><strong>Número de páginas: </strong> $num_paginas</li>
    <li><strong>Precio: </strong>" . sprintf("%.2f", $precio) ."€ </li>

</ul>

";

?>