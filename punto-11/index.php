<?php
$suma = 0;
for ($numero = 0; $numero <= 100; $numero++) {
    if ($numero % 2 != 0) {
        echo $numero . "\n";
        $suma += $numero;
    }
}
echo "La suma de los números impares del 0 al 100 es: " . $suma;
?>