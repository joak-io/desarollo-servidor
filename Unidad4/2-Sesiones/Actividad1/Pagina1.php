<?php
session_start();

if (isset($_SESSION["usuario"]) && 
    isset($_SESSION["idioma"])){
    echo "<p>Nombre: " . $_SESSION["usuario"] . "</p>";
    echo "<p>Idioma: " . $_SESSION["idioma"] . "</p>";
}else{
    echo "<p>No se ha especificado ninguna configuración</p>";
}
