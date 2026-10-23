<?php

class Producto{
    private string $nombre;
    private float $precio=0.0;
    private int $stock=0;

    public function __construct(
        string $nombre,
        float $precio=0.0,
        int $stock=0
    )
    {
        $this->nombre = $nombre;
        $this->precio=$precio;
        $this->stock=$stock;
    }

    public function __get(string $propiedad)
    {
        return $this->$propiedad;
    }

    public function __set(string $propiedad, mixed $valor){
             $this->$propiedad = $valor;
    }

    public function mostrar() : void
    {
        echo  "Producto: " . $this->nombre . " | Precio: " . $this->precio . "€ | Stock: " . $this->stock . "<br>";
    }

    public function aplicarDescuento (float $porcentaje) : void{
        $this->precio = $this->precio - ($this->precio * ($porcentaje/100));
    }

    public function actualizarStock(int $cantidad): void{
        $this->stock +=$cantidad;
    }

    public function estaDisponible() : bool{
        $stock=$this->stock;
        $disponibilidad = true;
        if($stock<=0){
            $disponibilidad = false;
        }
        return $disponibilidad;
    }

}

?>