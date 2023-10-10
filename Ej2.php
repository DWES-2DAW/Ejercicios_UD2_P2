<?php

/* 2.EJERCICIO 2
Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for. Cambia el código para
hacerlo con un while y con un do-while */

/* 
for ($i = 5; $i <= 100; $i += 5) {
    echo $i . "\n";
}
 */

/* $i = 5;
while ($i <= 100) {
   echo $i-"\n";
   $i++;

} */

/* $i=5;
do {
    echo $i."\n";
    $i +=5;
   
} while ($i <= 100); */


$continuar = "s";

do {
    echo "Escribe algo:\n";
    $entrada = readline();
    echo "Escribiste: " . $entrada . "\n";
    
    echo "¿Deseas continuar? (s/n)\n";
    $continuar = readline();
} while (strtolower($continuar) === "s");

echo "¡Hasta luego!\n";
