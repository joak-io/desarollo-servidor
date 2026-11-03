<?php
class HabitacionDoble extends Habitacion{

    public function calcularPrecio($noches){
        $precioFinal = ($this->precioNoche + 20) * $noches;
        return $precioFinal;
    }

}
?>