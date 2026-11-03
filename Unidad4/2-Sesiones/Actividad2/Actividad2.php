<?php

$sala = $_POST["sala"];
$fecha = $_POST["fecha"];
$horas = $_POST["horas"];


session_start();
    $_SESSION["sala"] = $sala;
    $_SESSION["fecha"] = $fecha;
    $_SESSION["horas"] = $horas;

echo "<p>Reserva realizada</p>";

echo "<a href='Confirmacion2.php'>Pagina Confirmación</a>";
