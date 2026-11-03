<?php

session_start();

$actividad = $_POST["actividad"];

if($_SESSION["logueado"] == true){
    $_SESSION["reserva"] = $actividad;
    echo "<p>Datos de la reserva: </p>
    $actividad";
    echo "<br><br><a href='Confirmacion6.php' >Confirmar Reserva</a>";
}