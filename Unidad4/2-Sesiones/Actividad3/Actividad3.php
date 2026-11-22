<?php

$nombre =  $_POST["nombre"];
$edad =  $_POST["edad"];
$plataformas =  $_POST["plataforma"];
$generos =  $_POST["generos"];
$habitual =  $_POST["habitual"];
$horasSemanas =  $_POST["horasSemanas"];

$generoValores="";

session_start();
    $_SESSION["nombre"]=$nombre;
    $_SESSION["edad"]=$edad;
    $_SESSION["plataforma"]=$plataformas;
    $_SESSION["generos"]=$generos;
    $_SESSION["habitual"]=$habitual;
    $_SESSION["horasSemanas"]=$horasSemanas;


if  ( isset($_SESSION["nombre"]) && 
    isset($_SESSION["edad"]) &&
    isset($_SESSION["plataforma"]) &&
    isset($_SESSION["generos"]) &&
    isset($_SESSION["habitual"]) &&
    isset($_SESSION["horasSemanas"])    
){

    $habitualMsj = $_SESSION["habitual"];


    echo "<p>Nombre: " . $_SESSION["nombre"] . "</p>
    <p>Edad: " . $_SESSION["edad"] . "</p>  
    <p>Plataforma: " . $_SESSION["plataforma"] . "</p> ";

    
    foreach($_SESSION["generos"] as $genero){
        $generoValores .= $genero . " ";
    }

    echo "<p>El usuario ha seleccionado estos generos: ". $generoValores . "</p>";

    if($habitualMsj=="si"){
        echo "<p>El usuario juega habitualmente</p>";
    }else{
        echo "<p>El usuario NO juega habitualmente</p>";
    }



}