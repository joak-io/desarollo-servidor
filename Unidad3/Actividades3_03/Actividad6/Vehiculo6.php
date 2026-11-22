<?php

class Vehiculo{
    private string $marca;
    private string $modelo;
    private int $agno;


    function __construct(
        string $marca,
        string $modelo,
        int $agno
    )
    {
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->agno=$agno;
    }


    function __get($propiedad)
    {
        return $this->$propiedad;
    }


    function __toString()
    {
        return "Marca: $this->marca | Modelo: $this->modelo | Año: $this->agno";
    }


}



?>