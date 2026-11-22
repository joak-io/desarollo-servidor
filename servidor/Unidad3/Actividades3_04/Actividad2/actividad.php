<?php

require_once("funciones.php");

$productitos =[
    $prod1 = new Producto("Taza", 13.45, "Vajilla"),
    $prod2 = new Producto("Tetera", 7.45, "Vajilla"),
    $prod3 = new Producto("Microondas", 70.54, "Electrodoméstico"),
    $prod4 = new Producto("Air Fryer", 63.45, "Electrodoméstico"),
    $prod5 = new Producto("Plato Hondo", 3,99, "Vajilla"),
    $prod6 = new Producto("Plato Playo", 5.5, "Vajilla")
];


guardarProductos($productitos);
echo "Productos Guardados";


echo "Ahora vamos a leerlos:";
$productosRecuperados = leerProductos();

foreach ($productosRecuperados as $prod){
    $prod->mostrar();
    echo"<br>";
}

?>