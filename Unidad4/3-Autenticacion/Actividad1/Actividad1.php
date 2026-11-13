<?php


$contrasegna = "1234";
$contrasegnaPrueba="1234";
$hash = password_hash($contrasegna, PASSWORD_DEFAULT);

echo "<p>Contraseña original: $contrasegna</p>";
echo "<p>Contraseña hasheada: $hash</p>";

echo "<p>Vamos a comprobar las contraseñas</p>";

if (!password_verify($contrasegnaPrueba, $hash)){
    echo "Contraseña incorrecta";
}else if (password_verify($contrasegna, $hash)){
    echo "<p>Contraseña correcta</p>";
}

