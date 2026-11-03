<?php

session_start();

if(isset($_SESSION["identificado"]) && $_SESSION["identificado"]== true ){
    echo "<p>Bienvenido ". $_SESSION["usuario"] . "</p>";
    echo "<p>La abundancia es lo mismo que la insuficiencia</p>";
    echo "<a href='Logout5.php'>CERRAR SESIÓN</a>";
}

