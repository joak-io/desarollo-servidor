<?php
require_once("Empleado.php");
require_once("EmpleadoFijo.php");
require_once("EmpleadoTemporal.php");


$empleados =[
    $empleado1= new Empleado("Laura García", "Administracion"),
    $empleado2= new EmpleadoFijo("Carlos Lopez", "Desarrollo", 5),
    $empleado3= new EmpleadoFijo("Marta Sanchez", "Sistemas", 10),
    $empleado4= new EmpleadoTemporal("David Martin", "Desarrollo", 120),
    $empleado5= new EmpleadoTemporal("Ana Perez", "Diseño", 80)
];

foreach ($empleados as $empleado){
    echo"<p>$empleado ";
    if($empleado instanceof EmpleadoFijo){
        echo" | Antigüedad: $empleado->antiguedad</p>";
        echo "<p>Salario: ". $empleado->calcularSalario($empleado->antiguedad) . "€ </p> <hr>";
    }
    else if ($empleado instanceOf EmpleadoTemporal){
        echo" | Horas: $empleado->horas</p>";
        echo "<p>Salario: ". $empleado->calcularSalario($empleado->horas) . "€ </p> <hr>";
    }else{
        echo "<p> Salario: ". $empleado->calcularSalario() ."€ </p> <hr>";
    }
    
};


?>