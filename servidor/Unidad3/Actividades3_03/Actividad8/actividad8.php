<?php
require_once("Vehiculo.php");
require_once("Coche.php");
require_once("Furgoneta.php");

$vehiculos =[
    $vehiculo= new Vehiculo("0001-ABC", "Toyota", "Corolla"),
    $coche1= new Coche("0002-DEF", "Seat", "León"),
    $coche2= new Coche("0003-GHI", "Ford", "Focus"),
    $furgoneta1= new Furgoneta("0004-JKL", "Renault", "Trafic"),
    $furgoneta2= new Furgoneta("0005-MNO", "Ford", "Transit")
];

foreach($vehiculos as $vehiculo){
    echo"<p>$vehiculo</p>";
    if($vehiculo instanceof Coche){
        $dias=rand(2,7);
        echo"<p>Dias de alquiler: $dias</p>";
        echo "<p>Precio del alquiler: " . sprintf("%.2f",$vehiculo->calcularPrecioAlquiler($dias)). "€ </p> <hr>";
    }
    else if($vehiculo instanceof Furgoneta){
        $dias=rand(2,7);
        echo"<p>Dias de alquiler: $dias</p>";
        echo "<p>Precio del alquiler: " . sprintf("%.2f",$vehiculo->calcularPrecioAlquiler($dias)). "€ </p> <hr>";
    }else{
        $dias=rand(2,7);
        echo"<p>Dias de alquiler: $dias</p>";
        echo "<p>Precio del alquiler: " . sprintf("%.2f",$vehiculo->calcularPrecioAlquiler($dias)). "€ </p> <hr>";
    }
}



?>