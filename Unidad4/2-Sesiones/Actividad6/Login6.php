<?php

$usuario = $_POST["usuario"];
$pwd = $_POST["pwd"];

$validaUser= "Admin";
$validaPwd = 1234;

session_start();


if($usuario !=$validaUser && $pwd != $validaPwd){
    echo "<p> Usuario y contrasña incorrectos. Intenta de nuevo </p>";
    echo "<a href='Actividad6.html'>Vuelve a intentar</a>";
}else{
    $_SESSION["usuario"]=$usuario;
    $_SESSION["pwd"]=$pwd;
    $_SESSION["logueado"] = true;
    echo "<p>Inicio de sesión correcto</p>";
    echo "<a href='Actividad6.php'>Pagina de la actividad</a>";  
}