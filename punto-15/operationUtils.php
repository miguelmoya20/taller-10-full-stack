<?php  
// 1. funcion para poder obtener un numero

function getNumber() {
  echo "Ingrese un numero para operar: \n";
  return readline();
}

// 2. funcion para mostrar el menu y obtener la opcion del usuario

function showMenu() {
  echo "Digite la opcion que desea realizar: \n";
  echo "1. Sumar \n";
  echo "2. Restar \n";
  echo "3. Multiplicar \n";
  echo "4. Dividir \n";
  
  return readline();
}

// 3. funcion que realice la operacion correcta

function operate($x, $y, $option) {

  switch ($option) {
    case 1:
      return add($x, $y);
    case 2:
      return sub($x, $y);
    case 3:
      return dot($x, $y);
    case 4:
      return split($x, $y);
    default:
    echo " Opcion no valida \n";
    return 0;
  }
  
  return 0;
}

// 4. funciones por cada operacion

function add($x, $y) {
  return $x+ $y;
}

function sub($x, $y) {
  return $x - $y;
}

function dot($x, $y) {
  return $x * $y;
}

function split($x, $y) {
  return $x / $y;
}

?>