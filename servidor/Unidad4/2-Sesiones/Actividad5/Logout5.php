<?php

session_start();

session_unset(); //Borrar variables de sesion

session_destroy(); //Borrar sesion

echo "<p>Se ha cerrado la sesión.</p>";
echo "<a href='Actividad5.html'>Vuelve a iniciar sesion</a>";
