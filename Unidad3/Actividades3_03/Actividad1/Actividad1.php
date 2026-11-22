<?php
require_once "Producto1.php";

$producto0 = new Producto("Camiseta", 12.25, 15);
$producto1 = new Producto("Calcetines", 2.5, 5);
$producto2 = new Producto("Pantalon", 21.95, 10);


echo  "Producto 1: " . $producto0->nombre . " | Precio: " . $producto0->precio . "€ | Stock: " . $producto0->stock . "<br>";
echo  "Producto 2: " . $producto1->nombre . " | Precio: " . $producto1->precio . "€ | Stock: " . $producto1->stock . "<br>";
echo  "Producto 3: " . $producto2->nombre . " | Precio: " . $producto2->precio . "€ | Stock: " . $producto2->stock . "<br>";

echo"<br> Precio del Producto 1 luego de aumentarlo: <br>";
$producto0->precio=15.45;
echo  "Producto 1: " . $producto0->nombre . " | Precio: " . $producto0->precio . "€ | Stock: " . $producto0->stock . "<br>";

?>