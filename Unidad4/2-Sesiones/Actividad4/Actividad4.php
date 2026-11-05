<?php



$productos=[
    "Portátil" => 800,
    "Monitor" => 200,
    "Teclado" => 40,
    "Raton" => 20,
    "Altavoces" => 35,
    "Webcam" => 50
];



if(!isset($_SESSION["carrito"])){
    $_SESSION["carrito"]=[]; //un array que contiene el producto y la cantidad
}

if(isset($_POST["accion"]) && isset($_POST["productos"])){
    $producto = $_POST["productos"];
    $accion = $_POST["accion"];

    if ($accion === "anade"){
        if(isset($_SESSION["carrito"][$producto])){
            $_SESSION["carrito"][$producto]++;
        }else{
            $_SESSION["carrito"][$producto] = 1;
        }
        echo "<p>Producto añadido al carrito</p>";

    }else if($accion === "elimina"){
        if(isset($_SESSION["carrito"][$producto])){
            unset($_SESSION["carrito"][$producto]);
            echo "<p>Producto eliminado del carrito</p>";
        }else{
            echo "<p>El producto no estaba en el carrito</p>";    
        }
        

    }else if($accion==="vaciar"){
        $_SESSION["carrito"]=[];
        echo "<p>Se ha vaciado el carrito</p>";    
    }
}
echo "<h1>Carrito de compras</h1>";

if(count($_SESSION["carrito"])===0){
    echo "<p>El carrito está vacio</p>";
}else{
    $total=0;

    echo "<ul>";
    foreach ($_SESSION["carrito"] as $producto->$cantidad){
        $precio = $productos[$producto];
        $subtotal = $precio * $cantidad;
        $total = $total + $subtotal;

        echo "<li>";
        echo $producto . " - ";
        echo $precio . " € x ";
        echo $cantidad . " = ";
        echo $subtotal . " €";
        echo "</li>";
    }
    echo "</ul>";

    echo "<h2>Total: " . $total . "€ </h2>";
}