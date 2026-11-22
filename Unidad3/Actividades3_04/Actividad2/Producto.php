<?php


class Producto{
    private string $nombre;
    private float $precio;
    private string $categoria;

    const SEPARADOR = ";";

    public function __construct(
        string $nombre,
        float $precio,
        string $categoria
    )
    {
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->categoria=$categoria;
    }

    public function __get($propiedad)
    {
        return $this->$propiedad;
    }

    public function mostrar(){
        echo "Producto: $this->nombre | Precio: " . sprintf("%.2f", $this->precio) . " | Categoria: $this->categoria ";
    }

    public function obtenerCadenaFichero(){
        $lineaProd = $this->nombre . self::SEPARADOR . $this->precio . self::SEPARADOR . $this->categoria;
        return $lineaProd;
    }

    public static function crearDesdeCadena(string $lineaTexto){
        $lineaFichero = explode(self::SEPARADOR, $lineaTexto);

        if (count($lineaFichero) <3){return null;}

        return new Producto(
            $lineaFichero[0], 
            (float)$lineaFichero[1], 
            $lineaFichero[2]);
    }
}


?>