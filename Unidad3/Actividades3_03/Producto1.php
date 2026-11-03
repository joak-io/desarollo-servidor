<?php

class Producto{
    private string $nombre;
    private float $precio=0.0;
    private int $stock=0;

    public function __construct(
        string $nombre,
        float $precio=0.0,
        int $stock=0
    )
    {
        $this->nombre = $nombre;
        $this->precio=$precio;
        $this->stock=$stock;
    }

    public function __get(string $propiedad)
    {
        return $this->$propiedad;
    }

    public function __set(string $propiedad, mixed $valor){
             $this->$propiedad = $valor;
    }

}

?>