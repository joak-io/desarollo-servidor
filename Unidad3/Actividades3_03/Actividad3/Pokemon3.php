<?php

class Pokemon{
    public int $numero=0;
    public string $nombre;
    public string $tipo;
    public string $descripcion;
    public string $imagen;


    public function __construct(int $numero=0, 
                                string $nombre, string $tipo, 
                                string $descripcion, string $imagen)
    {
        $this->numero=$numero;
        $this->nombre=$nombre;
        $this->tipo=$tipo;
        $this->descripcion=$descripcion;
        $this->imagen=$imagen;
    }

    public function __get(string $propiedad)
    {
        return $this->$propiedad;
    }

    public function __toString()
    {
        return $this->numero . " - " .
        $this->nombre . " - " .
        $this->tipo . " - " . 
        $this->descripcion . " - " ;
    }
}

?>