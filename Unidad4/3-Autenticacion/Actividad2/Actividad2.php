<?php

$usuario = $_POST["user"];
$pwd = $_POST["pwd"];

$pwdHash = password_hash($pwd, PASSWORD_DEFAULT);

echo "<p> Usuario: $usuario </p>";
echo "<p> Hash: $pwdHash </p>";

echo "<p>Usuario registrado correctamente</p>";
