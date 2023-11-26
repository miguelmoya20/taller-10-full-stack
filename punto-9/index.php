<?php
function multiplicar_tabla($numero) {
    $i = 0;
    $j = 0;

    while ($i <= 30) {
        $resultado = $numero * $i;
        echo $numero . " x " . $i . " = " . $resultado . "\n";

        $i++;
    }
}

$numero = (int)readline("Ingrese un número para crear su tabla de multiplicar: ");
multiplicar_tabla($numero);
?>