<?php

const TARIFA_NORMAL = 25000;
const DESCUENTO_AFILIACION_A = 0.2;
const DESCUENTO_AFILIACION_B = 0.3;

function calculateDiscount($afiliacion, $cantidad) {
    $descuentoAplicable = 0;

    if($afiliacion == 'A' || $afiliacion == 'B') {
        $descuentoAplicable = $afiliacion == 'A' ? DESCUENTO_AFILIACION_A : DESCUENTO_AFILIACION_B;
    }

    $valorDescuento = $cantidad * TARIFA_NORMAL * $descuentoAplicable;
    $total = $cantidad * TARIFA_NORMAL - $valorDescuento;

    return $total;
}

echo "Ingrese su tipo de afiliación (A, B, C): ";
$afiliacion = readline();

echo "Ingrese la cantidad de personas: ";
$cantidad = readline();

$total = calculateDiscount($afiliacion, $cantidad);

echo "El valor total de las entradas a la bolera es: " . $total;

?>