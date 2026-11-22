<?php
$producto1="Teclado Mecanico";
$producto2="Ratón Inalámbrico";

$precio1=49.99;
$precio2=24.95;

$cantidad1=1;
$cantidad2=2;


$importe1=$precio1*$cantidad1;
$importe2=$precio2*$cantidad2;
$importe_final=$importe1+$importe2;

echo"
<h1>Factura</h1>

<table border=1>
    <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th>Importe</th>
    </tr>

    <tr>
        <td>$producto1</td>
        <td>" . sprintf("%.2f", $precio1) ."€ </td>
        <td>$cantidad1</td>
        <td>" . sprintf("%.2f", $importe1) ."€$</td>
    </tr>

    <tr>
        <td>$producto2</td>
        <td>$precio2</td>
        <td>$cantidad2</td>
        <td>$importe2</td>
    </tr>

    <tr>
        <td collspan=3>TOTAL</td>
        <td>$importe_final</td>
    </tr>


</table>
";

?>