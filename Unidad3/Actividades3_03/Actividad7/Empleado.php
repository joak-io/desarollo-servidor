<?php

class Empleado{
    private string $nombre;
    private string $depto;
    private int $salario=0;

    public function __construct(string $nombre, string $depto)
    {
        $this->nombre=$nombre;
        $this->depto=$depto;
    }

    public function __toString()
    {
    return "Nombre: $this->nombre | Departamento: $this->depto | ";
    }

    public function __get($propiedad) : mixed {
        return $this->$propiedad;
    }

    public function calcularSalario(){
        $salario=1500;

        return sprintf("%.2f",$salario);
    }

}


?>