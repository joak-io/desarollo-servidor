<?php

$nombre = $_POST["nombre"];
$idioma = $_POST["idioma"];

session_start();
    $_SESSION["usuario"] = $nombre;
    $_SESSION["idioma"]= $idioma;

echo "<p>Se ha guardado la configuración de nombre e idioma</p>";

echo "<a href='Pagina1.php'>Pagina 1</a>";


