<?php

// DATOS DE ENTRADA
$number = 0;

// PROCESO
echo "Digite el numero a multiplicar:";
$number = readline();

for ($i = 0; $i <= 30; $i++) {
    $result = $number * $i;
    echo $number. "X". $i. "=" .$result . "\n"; 
}

?>