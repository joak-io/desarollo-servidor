<?php

$ultimoProducto = $_POST["productos"];
$duracion = time() + 7 * 24 * 60 * 60;


if(isset($_COOKIE["ultimoProducto"])){

    $valorAntiguo = $_COOKIE["ultimoProducto"];
    echo "<p>El ultimo producto fue: " . $valorAntiguo . "</p>";
    setcookie("ultimoProducto", $ultimoProducto, $duracion);
    echo "<p>Se ha actualizado el producto</p>";

}else{
    setcookie("ultimoProducto", $ultimoProducto, $duracion);
    echo "<p>Producto seleccionado: " . $ultimoProducto . "</p>";
}