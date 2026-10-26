<?php


    function leerProductos(){
        $datos=[];
        try{
            $fichero = fopen("Productos.txt", "r");

            if($fichero === false){
                throw new Exception("No se puede abrir el fichero");
            }

            while (($linea = fgets($fichero)) !== false){
                $datos[] = explode(";", $linea);
   
            }
            fclose($fichero);
        }
        catch(Exception $e){
            echo "Error: " . $e->getMessage();
        }
        return $datos;
    }

    function mostrarProductos($array){
        echo "<ul>";
            foreach ($array as $prod){
               echo"<li>$prod[0] - $prod[1] € - $prod[2] </li> ";
            }
        echo "</ul>";

    }

?>