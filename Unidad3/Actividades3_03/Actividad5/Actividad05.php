<?php

require_once("Cuenta05.php");

$cuentas =[
    $cuenta1= new Cuenta("Ruben Abad", "ES001", 500.0),
    $cuenta2= new Cuenta("Joaquin Sanz", "AR001", 250.0),
    $cuenta3= new Cuenta("Daniel Anadon", "ES002", 100.0)
];

foreach ($cuentas as $cuenta){
    $ingreso = rand(50, 200);
    $retirado = rand(50, 200);
    echo "<p>Informacion inicial: </p>
    <strong>$cuenta</strong>
    <p>Ingreso: $ingreso €</p>
    <p>Retirado: $retirado €</p>";

    if ($cuenta->tieneSaldo()){
        echo "La cuenta dispone de Saldo";
    }
    else {
        echo "La cuenta NO dispone de Saldo";
    }
    $cuenta->ingresar($ingreso);
    $cuenta->retirar($retirado);
    echo "<p><strong>Informacion Final: </strong> $cuenta</p><br>";
}

?>