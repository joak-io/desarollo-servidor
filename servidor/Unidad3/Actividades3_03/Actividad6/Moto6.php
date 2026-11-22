<?php

class Moto extends Vehiculo{
    private int $cilindrada=0;

    public function __construct(
        string $marca,
        string $modelo,
        int $agno,
        int $cilindrada
    ) {
        parent::__construct($marca, $modelo, $agno);
            $this->cilindrada=$cilindrada;
    }

    public function __get(string $nombre){
        if($nombre === "cilindrada"){
            return $this->cilindrada;
        }
        return parent::__get($nombre); //Hecho de forma correcta con 
                                    //el get
    }


}


?>