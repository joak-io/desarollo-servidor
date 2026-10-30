<?php

$nombre =  $_POST["nombre"];
$edad =  $_POST["edad"];
$plataformas =  $_POST["plataforma"];
$generos =  $_POST["generos"];
$habitual =  $_POST["habitual"];
$horasSemanas =  $_POST["horasSemanas"];


session_start();
    $_SESSION["nombre"]=$nombre;
    $_SESSION["edad"]=$edad;
    $_SESSION["plataforma"]=$plataformas;
    $_SESSION["generos"]=$generos;
    $_SESSION["habitual"]=$habitual;
    $_SESSION["horasSemanas"]=$horasSemanas;
