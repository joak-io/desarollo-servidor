<?php

class Coche extends Vehiculo{
    protected int $numeroPuertas=0;

    public function __construct(
        string $marca,
        string $modelo,
        int $agno,
        int $numeroPuertas=0
    ) {
        parent::__construct($marca, $modelo, $agno);
            $this->numeroPuertas=$numeroPuertas;
    }


}




?>