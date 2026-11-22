<?php

class Coche extends Vehiculo{

    public function calcularPrecioAlquiler($dias){
        $precioDia=35;
        $precioFinal= $precioDia * $dias;
        return $precioFinal;
    }

}

?>