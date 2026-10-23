<?php
const IVA=21;

function obtenerNombre($nombreProducto){
    return strtoupper($nombreProducto);
}

function calcularSubtotal($precio, $cantidad){
    $subtotal=$precio*$cantidad;
    return $subtotal;
}

function aplicarIVA($subtotal){
    $precioFinal = $subtotal + ($subtotal * IVA / 100);
    return $precioFinal;
}

function obtenerCategoriaPrecio($precio){
    $categoria="";
    if($precio<=0){
        $categoria="Inválida";
    }
    else if($precio<20){
        $categoria="Economico";
    }
    else if($precio<=50){
        $categoria="Estandar";
    }
    else {
        $categoria="Premium";
    }

    return $categoria;
}


$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];
$nombreProducto = $_POST["producto"];
$subtotal= calcularSubtotal($precio, $cantidad);

$precioFinal = aplicarIVA($subtotal);
$categoria = obtenerCategoriaPrecio($precio);

echo "
    <h1>Información de Producto</h1>

    <p> <b>Producto:</b> " . obtenerNombre($nombreProducto) . "</p> 
    <p> <b>Precio Unitario: </b> " . number_format($precio, 2, ',', '.' ). "</p>
    <p> <b>Cantidad:</b> " . $cantidad . "</p>
    <p> <b>Subtotal:</b> " . number_format($subtotal, 2, ',', '.' ) . "</p> 
    <p> <b>IVA:</b> " . IVA . "</p> 
    <p> <b>Precio Final:</b> " . number_format($precioFinal, 2, ',', '.' ) .  "</p>
    <p> <b>Categoria:</b> " . $categoria  . "<br>
    ";

?>