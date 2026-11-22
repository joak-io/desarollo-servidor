<?php

require_once("funciones.php");
$productos = leerProductos("Productos01.txt");

echo "<h1>Catálogo de Productos</h1>";


if (!empty($productos)) {
    mostrarProductos($productos);

} else {
    echo "<p>No hay productos para mostrar o hubo un error al leer el fichero.</p>";
}


 $contador =0;
 $cantidad= count($productos);
    foreach ($productos as $producto){
        $contador+=$producto[1];
    }
    $precioMedio = $contador/$cantidad;
    echo " <h3> Precio Medio</h3>
    $precioMedio €";

?>