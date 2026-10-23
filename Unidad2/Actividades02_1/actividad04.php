<?php

$nombre="Auriculares Inalámbricos";
$descripcion="Auriculares con conexión Bluetooth y bateria de larga duración";
$precio=59.9;

echo "<h1> $nombre </h1> <br>"
        . "<h3>Descripcion </h3> <br>"
        . "$descripcion <br>"
        . "<h3> Precio </h3> <br>"
        . sprintf("%.2f", $precio) . "€"
;



?>