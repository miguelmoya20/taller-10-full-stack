<?php
function operation($num1, $num2, $op) {
    switch ($op) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 == 0) {
                return "Error: Division by zero is not allowed";
            } else {
                return $num1 / $num2;
            }
        default:
            return "Error: Invalid operation";
    }
}

echo "Digite el primer numero a operar: ";
$num1 = trim(fgets(STDIN));

echo "Digite el segundo numero a operar: ";
$num2 = trim(fgets(STDIN));

echo "Elija la opcion para realizar la operacion siendo
+ - > SUMAR
- - > RESTAR
* - > MULTIPLICAR
/ - > DIVIDIR
";
$op = trim(fgets(STDIN));

$result = operation($num1, $num2, $op);
echo "El resultado de la operacion es: $result";
?>