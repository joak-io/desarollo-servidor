<?php
// Completar el código PHP necesario para preparar la partida.

if (isset($_POST["nombre"]) && isset($_POST["categoria"])) {
    setcookie("nombre", $_POST["nombre"], time() + 60 * 60 * 24 * 30);
    setcookie("categoria", $_POST["categoria"], time() + 60 * 60 * 24 * 30);
    session_start();
    $_SESSION["categoria"] = $_POST["categoria"];
    $categoria = $_SESSION["categoria"];
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Concurso de preguntas</title>
</head>

<body>

    <h1>¡Demuestra lo que sabes!</h1>

    <h2>Categoría: <?php echo $categoria; ?></h2>

    <form action="resultado.php" method="post">

        <?php
        // Mostrar las preguntas de la categoría seleccionada.
        require_once("preguntas.php");
        $preguntasCategoria = $preguntas[$categoria];
        for ($i = 0; $i < count($preguntasCategoria); $i++) {
            $preguntasCategoria[$i]->mostrarPregunta($i);
        }



        ?>

        <br>
        <input type="submit" value="Finalizar concurso">

    </form>

</body>

</html>