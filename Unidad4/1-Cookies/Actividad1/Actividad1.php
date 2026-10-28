<?php

$nombre = $_POST["nombre"];
$accion = $_POST["accion"];

if ($accion === "guardar"){
    setcookie("usuario", $nombre, time() + 3600);
    echo "<p>Nombre guardado correctamente</p>";
    echo "<p>Nombre: " . $nombre . "</p>";

}else {
    if((isset($_COOKIE["usuario"]))){
        setcookie("usuario","",time()-3600);
        echo"<p>Cookie Eliminada</p>";
        echo"<p>Nombre almacenado: ".  $_COOKIE["usuario"] . " </p>";
    }else{
        echo"<p>No hay cookies guardadas</p>";
    }
}

?>