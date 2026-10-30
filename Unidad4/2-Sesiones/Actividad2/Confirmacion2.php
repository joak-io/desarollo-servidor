<?php

session_start();

if (isset($_SESSION["sala"]) &&
    isset($_SESSION["fecha"]) &&
    isset($_SESSION["horas"])
){
    echo "<p>Reserva actual: </p>";
    echo "<p>Sala: " . $_SESSION["sala"] . "</p>";
    echo "<p>Fecha: " . $_SESSION["fecha"] . "</p>";
    echo "<p>Hora: " . $_SESSION["horas"] . "</p>";
}else{
    echo "<p>No se ha hecho ninguna reserva</p>";
}