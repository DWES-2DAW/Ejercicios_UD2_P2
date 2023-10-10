<?php

/* 5. EJERCICIO
Hacer un programa en php que calcule el mayor de dos numeros almacenados en dos variables usando el
condicional if. */

$num1 = 12;
$num2 = 95;
/* 
if ($num1 > $num2) {
    echo $num1 . ' es mayor que ' . $num2;
} elseif ($num2 > $num1) {
    echo $num2 . ' es mayor que ' . $num1;
} else {
    echo $num1 . ' y ' . $num2 . ' son iguales';
}
 */
echo $num1 > $num2 ? $num1 . ' es mayor que ' . $num2 : ($num2 > $num1 ? $num2 . ' es mayor que ' . $num1 : $num1 . ' y ' . $num2 . ' son iguales');