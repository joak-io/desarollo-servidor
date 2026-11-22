<?php

class Habitacion{
    private int $numero=0;
    private float $precioNoche=60.0;
    private bool $ocupada=false;

    public function __construct(
        int $numero,
        float $precioNoche,
        bool $ocupada
    )
    {
        $this->numero=$numero;
        $this->precioNoche=$precioNoche;
        $this->ocupada=$ocupada;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __toString()
    {
        $estadoHabitacion = "";
        if($this->ocupada){
            $estadoHabitacion="Ocupada";
        }else{
            $estadoHabitacion="Disponible";
        }

        return "Habitacion $this->numero | Precio/Noche: " . sprintf("%.2f",  $this->precioNoche) . "€ | Estado: $estadoHabitacion";
    }

    public function reservar(){
        $this->ocupada=true;
        return "La habitacion ha sido reservada";
    }

    public function liberar(){
        $this->ocupada=false;
        return "La habitacion ha sido liberada";
    }

    public function estaDisponible(){
        if($this->ocupada){
            return "La habitacion está ocupada";
        }else{
            return "La habitación está disponible";
        }
    }

    public function calcularPrecio($noches){
        $precioFinal = $this->precioNoche * $noches;
        return $precioFinal;
    }


}
?>