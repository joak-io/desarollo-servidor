<?php
session_start();

if (isset($_SESSION["logueado"]) == true && $_SESSION["logueado"] == true){
    $actividades=[
        ["Visita Guiada","Lunes", "10:00"],
        ["Taller de fotografía", "Martes", "17:00"],
        ["Curso de cocina", "Miercoles", "18:00"],
        [ "Ruta de senderismo", "Sábado", "09:00"]
    ];


    echo    "
        <h1>Selecciona una actividada</h1>
        <form action='Reserva6.php' method='post'> " ;
            foreach ($actividades as $actividad){
                echo "<br> <input type=radio name='actividad' value=' " . $actividad[0] . "-" . $actividad[1] . "-" . $actividad[2] . " '>" .$actividad[0] . "-" . $actividad[1] . "-" . $actividad[2]  ;

            }
        echo "<br><br><button type='submit'>Enviar reserva</button>";

        echo "</form>
";
}else{
    echo "El usuario no está autenticado. Hazlo por favor <br><br>";
    echo "<a href='Actividad6.html'>Loguearse</a>";
}

