<?php
/* 
3.EJERCICIO 3
Programa que muestre por pantalla los 5 primeros números pares. */

$counter = 0;
for ($i = 0; $i < 100; $i++) {

  if ($i % 2 == 0 && $counter < 5) {
    $counter++;

    echo $i . "\n";
  }
}
