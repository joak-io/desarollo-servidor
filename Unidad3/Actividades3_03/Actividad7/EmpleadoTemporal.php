<?php

 class EmpleadoTemporal extends Empleado{
        protected int $horas=0;

        public function __construct(
            string $nombre, 
            string $depto, 
            int $horas
        ){
             parent::__construct($nombre, $depto);
                $this->horas=$horas;
        }

        public function calcularSalario(){
            $salario=0;
            for($i=0; $i<$this->horas; $i++){
                $salario= $this->horas * 10;
            }
            return sprintf("%.2f",$salario);
        }

    }
?>