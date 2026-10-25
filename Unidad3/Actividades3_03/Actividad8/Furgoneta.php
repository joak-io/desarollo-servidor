<?php

class Furgoneta extends Vehiculo{

    public function calcularPrecioAlquiler($dias){
        $precioDia=45;
        $precioFinal= $precioDia * $dias;
        return $precioFinal;
    }

}

?>