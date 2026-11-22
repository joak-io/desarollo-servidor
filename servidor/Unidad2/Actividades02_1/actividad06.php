<?php
$producto1="Teclado";
$producto2="Ratón";
$producto3="Monitor";

$marca1="Logitech";
$marca2="Razer";
$marca3="Samsung";

$ruta3="img/monitor.jpg";
$ruta2="img/raton.jpg";
$ruta1="img/teclado.jpg";

$precio1=39.99;
$precio2=29.99;
$precio3=199.99;

echo "<h1>Catálogo de Productos</h1>
<table border=1 >
    <tr>
        <th>Imagen</th>
        <th>Producto</th>
        <th>Marca</th>
        <th>Precio</th>
    </tr>

    <tr>
        <td><img alt='Imagen de Sora' src='$ruta1' width='100px'/></td>
        <td>$producto1</td>
        <td>$marca1</td>
        <td>". sprintf("%.2f", $precio1) . "€ </td>
    </tr>

    <tr>
        <td><img alt='Imagen de Sora' src='$ruta2' width='100px'/></td>
        <td>$producto2</td>
        <td>$marca2</td>
        <td>". sprintf("%.2f", $precio2) . "€ </td>
    </tr>

    <tr>
        <td><img alt='Imagen de Monitor' src='$ruta3' width='100px'/></td>
        <td>$producto3</td>
        <td>$marca3</td>
        <td>". sprintf("%.2f", $precio3) . "€ </td>
    </tr>

</table>";

?>