<?php

$sala = $_POST["sala"];
$fecha = $_POST["fecha"];
$horas = $_POST["horas"];


session_start();
    $_SESSION["sala"] = $sala;
    $_SESSION["fecha"] = $fecha;
    $_SESSION["horas"] = $horas;

echo "<p>Reserva actual: </p>";
echo "<p>Sala: " . $_SESSION["sala"] . "</p>";
echo "<p>Fecha: " . $_SESSION["fecha"] . "</p>";
echo "<p>Hora: " . $_SESSION["horas"] . "</p>";
