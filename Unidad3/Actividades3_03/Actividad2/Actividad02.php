<?php
require_once "Producto2.php";

$producto0 = new Producto("Camiseta", 12.25, 15);
$producto1 = new Producto("Calcetines", 2.5, 5);
$producto2 = new Producto("Pantalon", 21.95, 10);
$producto3 = new Producto("Chaqueta", 45.99, 9);


echo"<h3>Mostrar los 4 productos:</h3>";
$producto0->mostrar();
$producto1->mostrar();
$producto2->mostrar();
$producto3->mostrar();

echo"<h3>Aplicar descuento (20%) en un precio:</h3>Antes:<br>";
$producto0->mostrar();
$producto0->aplicarDescuento(20);
echo "Despues:<br>";
$producto0->mostrar();


echo"<h3>Actualizar stock (+5) cantidad en un producto:</h3>Antes:<br>";
$producto1->mostrar();
echo "Despues:<br>";
$producto1->actualizarStock(5);
$producto1->mostrar();

echo"<h3>Ver si un producto está disponible:</h3>Antes:<br>";
$producto2->mostrar();
if($producto2->estaDisponible()){
    echo "Esta disponible";
}
else{
    echo "No esta disponible";
}
$producto2->stock=0;

echo " <br> Despues de cambiar su stock a 0: <br>";
$producto2->mostrar();
if($producto2->estaDisponible()){
    echo "Esta disponible";
}
else{
    echo "No esta disponible";
}


?>