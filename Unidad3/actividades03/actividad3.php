<?php

    $dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado" , "Domingo"];
    $temperaturas= [30, 21, 23, 8, 17, 95, 22];



    echo"
    <h1>Datos de Temperaturas</h1>
"; 


function tempMax ($temperaturas){
        $maxima=$temperaturas[0];

        for ($i=0; $i < count($temperaturas); $i++){
            if($maxima<$temperaturas[$i]){
                $maxima=$temperaturas[$i];
            }
        }
        return $maxima;
    }

  $tempMaxima=tempMax($temperaturas);

function tempMin ($temperaturas){
        $minima=$temperaturas[0];

        for ($i=0; $i < count($temperaturas); $i++){
            if($minima>$temperaturas[$i]){
                $minima=$temperaturas[$i];
            }
        }
        return $minima;
    }

  $tempMinima=tempMin($temperaturas);




function tempMedia ($temperaturas){
        $media=$temperaturas[0];

        for ($i=0; $i < count($temperaturas); $i++){
                $media= $media + $temperaturas[$i];
        }
        $media = $media / count($temperaturas);
        return $media;
    }

  $tempMedia=tempMedia($temperaturas);

function sup20 ($temperaturas){
    $diaSup20=0;
    for($i=0;$i<count($temperaturas); $i++){
        if($temperaturas[$i] >20){
            $diaSup20++;
        }
    }
    return $diaSup20;
}
$diasMas20 = sup20($temperaturas);


function inf10 ($temperaturas){
    $diaInf10=0;
    for($i=0;$i<count($temperaturas); $i++){
        if($temperaturas[$i] <10){
            $diaInf10++;
        }
    }
    return $diaInf10;
}
$diasMas20 = inf10($temperaturas);



    for ($i=0; $i <count($dias); $i++){
        echo $dias[$i]. ": ". $temperaturas[$i]  . " ºC -";
        if($temperaturas[$i] <10){
            echo " Frio";
        }
        else if($temperaturas[$i]<20){
            echo " Fresco";
        }
        else if($temperaturas[$i]<30){
            echo " Templado";
        }
        else{
            echo " Caluroso";
        }
        echo"<br>";
    }

    echo"
    <h1>Estadísticas</h1><br>
        Temperatura maxima: $tempMaxima ºC<br>
        Temperatura minima: $tempMinima ºC<br>
        Temperatura media: " .sprintf("%.2f", $tempMedia) . " ºC<br>
        Dias con temperatura superior a 20 ºC: $diasMas20 <br>
    ";



   

  


?>