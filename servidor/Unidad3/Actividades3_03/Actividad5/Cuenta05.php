<?php

class cuenta{
    private string $titular;
    private string $numero;
    private float $saldo=0.0;

    function __construct(
        string $titular,
        string $numero,
        float $saldo=0.0
    )
    {
        $this->titular=$titular;
        $this->numero=$numero;
        $this->saldo=$saldo;
    }

    function __get(string $propiedad) : mixed
    {
         return $this->$propiedad;
    }

    function __toString()
    {
     return "Titular: $this->titular | Numero: $this->numero | Saldo: " . sprintf("%.2f", $this->saldo) . " €" ;
    }

    function ingresar($cantidad){
        $this->saldo += $cantidad;
    }

    function retirar($cantidad){
        $this->saldo -= $cantidad;
    }

    function tieneSaldo() : bool{
        $saldoPositivo= false;
        if ($this->saldo > 0){
            $saldoPositivo=true;
        }
        else{
            $saldoPositivo=false;
        }
        return $saldoPositivo;
    }

}

?>