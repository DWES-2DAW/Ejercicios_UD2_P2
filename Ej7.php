<?php

/* 7. EJERCICIO
Hacer un programa que, indicada una nomina en una variable, si es menor de 800€ le haga un incremento del
20%, si esta entre 800 € y 1200 € la deje como esta, y si es mayor le quite un 15%. Usar el condicional if. */


$nomina = 1300;

if ($nomina < 800) {
    $nomina += $nomina * 0.20;
    echo $nomina;
} elseif ($nomina >= 800 && $nomina <= 1200) {
    echo $nomina;
} elseif ($nomina > 1200) {
    $nomina -= $nomina * 0.15;
    echo $nomina;
}
