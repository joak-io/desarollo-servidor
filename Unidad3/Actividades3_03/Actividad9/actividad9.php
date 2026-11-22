<?php
require_once("Habitacion.php");
require_once("HabitacionIndividual.php");
require_once("HabitacionDoble.php");
require_once("HabitacionSuite.php");



$habitaciones =[
    $habitacion1= new HabitacionIndividual(101, 60.0, false),
    $habitacion2= new HabitacionDoble(201, 80.0, false),
    $habitacion3= new HabitacionDoble(202, 85.0, true),
    $habitacion4= new HabitacionSuite(301, 120.0, false),
    $habitacion5= new HabitacionSuite(302, 150.0, false)
];


foreach ($habitaciones as $habitacion){
    echo "<p>$habitacion</p>";
    echo "<p>" . $habitacion->estaDisponible(). " ";

    if(!$habitacion->ocupada){
        $habitacion->reservar();
        $noches = rand(2,5);
        echo "<br> Noches: $noches ";
        echo "<br> Precio de la estancia: " . sprintf("%.2f",$habitacion->calcularPrecio($noches)) . "€ ";
        echo "<br> " . $habitacion->liberar() . "";
    }
    echo "</p> <hr>";

}

?>