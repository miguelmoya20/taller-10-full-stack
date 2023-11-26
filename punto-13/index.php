<?php

// ARREGLO NUMÉRICO
$array_numeros = array();
$suma = 0;

for ($i = 0; $i < 5; $i++) {
  echo "Escriba los numero a sumar:";
  $array_numeros[] = readline();
}  


// PROCESO
for ($i = 0; $i < count($array_numeros); $i++) {
    $suma += $array_numeros[$i];
}

echo "La suma de los números en el arreglo es: " . $suma . "\n";

?>