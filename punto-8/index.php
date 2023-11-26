<?php
function bolera($afiliacion, $cantidadPersonas) {
    $precioTotal = 0;

    if ($afiliacion == 'A') {
        $precioTotal = 25000 * $cantidadPersonas;
        $descuento = 0.3;
    } elseif ($afiliacion == 'B') {
        $precioTotal = 25000 * $cantidadPersonas;
        $descuento = 0.25;
    } elseif ($afiliacion == 'C') {
        $precioTotal = 25000 * $cantidadPersonas;
        $descuento = 0.1;
    } elseif ($afiliacion == 'D') {
        $precioTotal = 25000 * $cantidadPersonas;
        $descuento = 0.05;
    } else {
        return "Error: Tipo de afiliación no válido";
    }

    $totalDescuento = $precioTotal * $descuento;
    $precioFinal = $precioTotal - $totalDescuento;

    return "El precio final de la bolera es: $" . number_format($precioFinal, 2);
}

echo "Digite el tipo de afiliación: ";
$afiliacion = trim(fgets(STDIN));

echo "Digite la cantidad de personas a llevar: ";
$cantidadPersonas = trim(fgets(STDIN));

$resultado = bolera($afiliacion, $cantidadPersonas);
echo $resultado;
?>