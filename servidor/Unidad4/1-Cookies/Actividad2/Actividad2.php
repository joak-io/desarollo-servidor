<?php

$nombre = $_POST["nombre"];
$idioma = $_POST["idioma"];
$texto = $_POST["texto"];
$infoAd = $_POST["infoAd"];

$dia = time() + 30*24*60*60;

setcookie("nombre", $nombre, $dia);
setcookie("idioma", $idioma, $dia);
setcookie("texto", $texto, $dia);
setcookie("infoAd", $infoAd, $dia);

echo "
<p>Preferencias almacenadas correctamente</p>
<h1>Preferencias Almacenadas</h1>";


if(isset($_COOKIE["nombre"])){
    echo "<p>Nombre: " . $_COOKIE["nombre"]  . "</p>";
}else{
    echo "No hay nombre";
}

if(isset($_COOKIE["idioma"])){
    echo "<p>Idioma: " . $_COOKIE["idioma"]  . "</p>";
}else{
    echo "No hay idioma";
}

if(isset($_COOKIE["texto"])){
    echo "<p>Tamaño de Texto: " . $_COOKIE["texto"]  . "</p>";
}else{
    echo "No hay Tamaño de texto <br>";
}

if(isset($_COOKIE["infoAd"])){
    echo "<p>Informacion adicional: " . $_COOKIE["infoAd"]  . "</p>";
}else{
    echo "No hay Informacion adicional";
}

?>