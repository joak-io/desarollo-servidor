<?php

    class EmpleadoFijo extends Empleado{
        protected int $antiguedad=0;

        public function __construct(string $nombre, string $depto, int $antiguedad)
        {
            parent::__construct($nombre, $depto);
                $this->antiguedad=$antiguedad;
        }

        public function calcularSalario(){
            $salario=1500;
            for($i=0; $i<$this->antiguedad; $i++){
                $salario+=50;
            }
            return sprintf("%.2f",$salario);
        }
    }

    


?>