    <?php

$peliculas= [
    [
        "titulo" => "El Padrino",
        "anio" => 1972,
        "nota" => 7.5 ,
        "votos" => 140
    ],
    [
        "titulo" => "Pulp Fiction",
        "anio" => 1994,
        "nota" => 8.1,
        "votos" => 1000
    ],
    [
        "titulo" => "La lista de Schindler",
        "anio" => 2023,
        "nota" => 9.0,
        "votos" => 1509
    ],
    [
        "titulo" => "El viaje d Chihiro",
        "anio" => 2001,
        "nota" => 9.8,
        "votos" => 1545
    ],
    [
        "titulo" => "Cadena Perpetua",
        "anio" => 1994,
        "nota" => 6.5,
        "votos" => 780
    ],
    [
        "titulo" => "Avatar",
        "anio" => 2009,
        "nota" => 5.8,
        "votos" => 1500
    ]
       
];

usort ($peliculas, function ($a, $b){
    return $b ["nota"] <=> $a ["nota"];
});


echo"
    <h1>Clasificación de Peliculas</h1>

    <table border=1>
        <tr>
            <th>Titulo</th>
            <th>Año</th>
            <th>Nota</th>
            <th>Votos</th>
            <th>Clasificacion</th>
        </tr>

    ";
    
   foreach($peliculas as $pelicula){
        echo "<tr>";
        foreach($pelicula as $clave => $valor){
            echo "
            <td>$valor</td>";
        }
        echo "<td>";
        if($pelicula["nota"] >= 9 && $pelicula["votos"] >= 1000){
            echo "Obra Maestra";
        }
        else if($pelicula["nota"] >= 8 && $pelicula["votos"] >= 500){
            echo "Muy recomendable";
        }
        else if($pelicula["nota"] >= 7){
            echo "Recomendada";
        }
        else if($pelicula["nota"] <= 7){
            echo "No recomendada";
        }
        if($pelicula["votos"] < 100){
            echo " - Pocos votos";
        }
        if($pelicula["anio"] > 2020 && $pelicula >= 8){
            echo " - Estreno destacado";
        }
        echo "
            </td>
        </tr>";
    }

?>