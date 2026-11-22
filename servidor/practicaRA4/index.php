<?php



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Concurso de preguntas</title>
</head>

<body>

    <h1>Concurso de preguntas</h1>

    <form action="partida.php" method="post">

        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" <?php if (isset($_COOKIE["nombre"])) {
                                                                echo "value=" . $_COOKIE["nombre"];
                                                            } ?>>
            <br><br>

            <label for="categoria">Categoría:</label>
            <select id="categoria" name="categoria">

                <option value="cine" <?php if (!isset($_COOKIE["categoria"])) {
                                            echo "selected";
                                        } ?>>
                    Cine
                </option>

                <option value="ciencia">
                    Ciencia
                </option>

                <option value="deporte">
                    Deporte
                </option>

            </select>
            </?php>

            <input type="submit" value="Comenzar concurso">

    </form>

</body>

</html>