<?php

session_start();

if($_SESSION["logueado"] == true){
    if(isset($_SESSION["reserva"]) == true){
        echo "<p>Datos de la reserva: </p>".
                $_SESSION["reserva"];
    }
    else{
        echo "No hay reservas hechas <br><br>";
    }
}
echo "<br><br><a href='Logout6.php' >Cerrar Session</a><br><br>";
echo "<a href='Actividad6.php' >Volver a reservar actividades</a>";