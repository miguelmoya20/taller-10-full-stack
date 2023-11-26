<?php

const MAYORIA_DE_EDAD = 18;

function generateMessage($name, $age) {
    $message = "";

    if ($age >= MAYORIA_DE_EDAD) {
        $message = "El usuario {$name} es mayor de edad.";
    } else {
        $message = "El usuario {$name} es menor de edad.";
    }

    return $message;
}

echo "Ingrese su nombre: ";
$name = readline();

echo "Ingrese su edad: ";
$age = readline();

$message = generateMessage($name, $age);

echo $message;

?>