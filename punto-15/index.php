<?php
include "operationUtils.php";
//DATOS DE ENTRADA
$numberOne = 0;
$numberTwo = 0;
$option = "";

// 1.llamar una funcion para pedir los numeros

$numberOne = getNumber();
$numberTwo = getNumber();

// 2.llamar una funcion para mostrar el menu y obtener la opcion del usuario

$option = showMenu();

// 3. llamara una funcion que seleccione la operacion

$result = operate($numberOne, $numberTwo, $option);

// 4. mostrar el resultado

echo "El resultado de la operacion es: $result \n";
?>