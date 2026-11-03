<?php
require_once("Vehiculo6.php");
require_once("Coche6.php");
require_once("Moto6.php");


$vehiculos =[
    $coche1= new Coche("Toyota", "Rav 4", 2006, 5),
    $coche2= new Coche("Ferrari", "La Ferrari", 2015, 3),
    $moto1= new Moto("Yamaha", "R1 Race", 2025, 998),
    $moto2= new Moto("Honda", "CB500F", 2021, 500)
];

foreach ($vehiculos as $vehiculo){
    echo"<p>$vehiculo</p>";
    if($vehiculo instanceof Coche){
        echo "<p>Número de puertas: $vehiculo->numeroPuertas </p> <hr>";
    }
    else if ($vehiculo instanceOf Moto){
         echo "<p>Cilindrada: $vehiculo->cilindrada</p> <hr>";
    }
};


?>