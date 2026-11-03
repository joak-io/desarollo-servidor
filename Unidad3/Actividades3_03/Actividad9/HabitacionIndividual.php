<?php

class HabitacionIndividual extends Habitacion{

        public function calcularPrecio($noches){
        $precioFinal = $this->precioNoche * $noches;
        return $precioFinal;
    }

}
?>