<?php

class Usuario{
    private $nombre;
    private $email;

    function __construct($nombre, $email)
    {
        $this->nombre=$nombre;
        $this->email=$email;
    }

    function __get($name)
    {
        return $this->$name;
    }

    function __set($name, $value)
    {
        $this->$name=$value;
    }

    function __toString()
    {
        return $this->nombre . $this->email; 
    }
}

$notas = [
    "Marta" => 5,
    "Luis" => 5,
    "Jose" => 8
] ;

$notas[1][1]="Luis" => 7;