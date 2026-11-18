<?php
// Completar el código PHP necesario para corregir la partida
// y calcular los resultados.
session_start();
if (isset($_SESSION["categoria"]) && isset($_SESSION["preguntas"])) {
    $categoria = $_SESSION["categoria"];
    $totalPreguntas = $_SESSION["preguntas"];
    $respondidas = $_POST[""]
}


session_unset();



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultado del concurso</title>
</head>

<body>

    <h1>Resultado del concurso</h1>

    <p>
        Categoría:
        <?php echo $categoria; ?>
    </p>

    <p>
        Preguntas respondidas:
        <?php echo $respondidas; ?>
    </p>

    <p>
        Aciertos:
        <?php echo $aciertos; ?>
    </p>

    <p>
        Errores:
        <?php echo $errores; ?>
    </p>

    <p>
        Puntuación:
        <?php echo $aciertos; ?> / <?php echo $totalPreguntas; ?>
    </p>

    <p>
        <a href="index.php">Volver al inicio</a>
    </p>

</body>

</html>