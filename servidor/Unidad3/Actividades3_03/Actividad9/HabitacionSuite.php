<?php
class HabitacionSuite extends Habitacion{

    public function calcularPrecio($noches){
        $precioFinal = ($this->precioNoche + 50) * $noches;
        return $precioFinal;
    }

}
?>