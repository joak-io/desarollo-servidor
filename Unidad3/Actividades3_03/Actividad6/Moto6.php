<?php

class Moto extends Vehiculo{
    protected int $cilindrada=0;

    public function __construct(
        string $marca,
        string $modelo,
        int $agno,
        int $cilindrada
    ) {
        parent::__construct($marca, $modelo, $agno);
            $this->cilindrada=$cilindrada;
    }


}


?>