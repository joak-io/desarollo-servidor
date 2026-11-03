<?php

require_once ("Pokemon3.php");

$pokemons=[
    $pokemon= new Pokemon(1, "Bulbasaur", "Planta/Veneno", "Pokemon que nace con una semilla en el lomo","https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/1.png" ),
    $pokemon2= new Pokemon(4,"Charmander","Fuego","Pokemon lagarto cuya cola mantiene una llama", "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/4.png"),
    $pokemon3 = new Pokemon(8,"Watortle","Agua","Pokemon con una larga y peluda cola", "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/8.png")
    ];

echo"<h1>Mostrar Pokemons </h1>";
foreach ($pokemons as $pokemon){
    echo $pokemon . "<br> <img src='$pokemon->imagen'/ height=200px>
    <br>";
}


?>