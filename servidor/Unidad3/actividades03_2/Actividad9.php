<?php

include("Funciones9.php");

$edad=$_POST["edad"];
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$username=$_POST["username"];

if(validarDatos($nombre, $edad, $email, $username) == true){
    mostrarUsuario($nombre, $edad, $email, $username);
}




?>