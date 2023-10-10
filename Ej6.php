<?php

/* 6. EJERCICIO
Crear un archivo php que, dados dos numeros almacenados en dos variables, nos muestre por pantalla el mayor
de ellos o la frase "Los numeros son iguales" si son iguales. Usar la estructura switch y el operador nave
espacial. */


$num1 = 41;
$num2 = 23;

switch ($num1 <=> $num2) {
    case -1:
        echo "El número mayor es " . $num2;
        break;
    case 0:
        echo "Los números son iguales";
        break;
    case 1:
        echo "El número mayor es " . $num1;
        break;
}
