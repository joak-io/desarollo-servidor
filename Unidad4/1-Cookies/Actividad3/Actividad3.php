<?php

$dia = time() + 30*24*60*60;
$ultimaVisita = date("Y-m-d H:i:s");

if(isset($_COOKIE["numeroVisitas"])){

    $visitas = $_COOKIE["numeroVisitas"] +1;

    setcookie("numeroVisitas",$visitas,$dia);
    
    echo "<p>Ya haz visitado esta pagina.</p>";
    echo "<p>Numero de visitas: " . $_COOKIE["numeroVisitas"] . "</p>";
    echo "<p>Ultima visita: " . $ultimaVisita . "</p>";

    

}else{
    setcookie("numeroVisitas",1,$dia);
    echo "<p>Bienvenido. Es tu primera visita</p>";
    setcookie("ultimavisita",$ultimaVisita, $dia);
}

?>