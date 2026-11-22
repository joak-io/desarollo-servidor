<?php

function validarDatos($nombre, $edad, $email, $username){
    if ($nombre != null && is_numeric($edad) && $email !=null && $username != null){
        return true;
    }
    else{
        return false;
    }

}

function mostrarUsuario($nombre, $edad, $email, $username){
    echo "
    <h1>Datos del Usuario</h1>
    Nombre: $nombre <br>
    Edad: $edad <br>
    Nombre de usuario: $username <br>
    Correo Electrónico: $email <br>
    ";
}



?>