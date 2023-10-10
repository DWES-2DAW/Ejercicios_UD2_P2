<?php
/* 8. EJERCICIO
Hacer un programa en php que defina una constante LIMITE y genere un numero aleatorio entre 1 y el limite y
lo muestre por pantalla indicando si es par o impar. Usar el operador ternario "?'y la funcion rand()). */

define('limite',50);

$number= rand(1,limite);

echo $number."\n";
echo $number % 2 == 0? 'numero par':'numero impar'; 

/* 
 echo "El número aleatorio es $number y es " . ($number % 2 == 0 ? 'par' : 'impar'); */
