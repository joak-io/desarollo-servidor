<?php

session_start();

if(isset($_SESSION["verificado"])){
    echo "Bienvenido " . $_SESSION["usuario"] . "<br>
    <a href='Logout3.php'>Cerrar sesión</a>";
}else{
    echo "<a href='Actividad3.html'>Acceso no sesiado <br>Volver a iniciar sesion</a>";
}
