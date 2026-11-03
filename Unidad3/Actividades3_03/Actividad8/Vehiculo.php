<?php

class Vehiculo{
    private string $matricula;
    private string $marca;
    private string $modelo;
    

    public function __construct(
        string $matricula,
        string $marca,
        string $modelo
    )
    {
        $this->matricula=$matricula;
        $this->marca=$marca;
        $this->modelo=$modelo;
    }

    public function __get($propiedad):mixed
    {
        return $this->propiedad;
    }

    public function __toString()
    {
        return "Matricula $this->matricula | Marca: $this->marca | Modelo: $this->modelo";
    }

    public function calcularPrecioAlquiler($dias){
        $precioDia=30;
        $precioFinal= $precioDia * $dias;
        return $precioFinal;
    }

}


?>