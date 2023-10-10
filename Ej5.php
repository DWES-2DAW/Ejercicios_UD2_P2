<?php

/* 5. EJERCICIO 5
Leer un array de números y mostrar si es positivo o negativo hasta que se encuentre un 0. */

 $numbers = [];
for ($i = 0; $i < 20; $i++) {
    $numbers[] = random_int(-100, 100);
} 

foreach ($numbers as $number) {
    if ($number == 0) {
        echo "Zero found! Stopping...\n";
    } elseif ($number > 0) {
        echo "$number is positive.\n";
    } else {
        echo "$number is negative.\n";
    }
}
 

/* $numbers = [];
for ($i = 0; $i < 10; $i++) {
    $numbers[] = random_int(-12, 12);
} 

$i = 0;
$zero= false;
while ($i < count($numbers) && !$zero) {
    if ($numbers[$i] == 0) {
        echo "Zero found! Stopping...\n";
        $zero= true;
    } else if ($numbers[$i] > 0) {
        echo "$numbers[$i] is positive.\n";
    } else {
        echo "$numbers[$i] is negative.\n";
    }
    $i++;
}
  */