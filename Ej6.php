
<?php

/* EJERCICIO 6 Leer un array de números y mostrar la media de todos los números introducidos hasta que se
encuentre un número negativo */


$sumMed = 0;

do {
    $num = [];
    for ($i = 0; $i < 20; $i++) {
        $num[] = random_int(-30, +30);
    }
    
    //var_dump($num);

    $numSum = array_sum($num);

    $numTotal = count($num);

    $sumMed = $numSum / $numTotal;
   echo "Valoramos el número $sumMed\n------------\n";
    if ($sumMed >= 0) {
        echo 'El numero ' . $sumMed . ' es positivo'."\n------------\n";
    }
} while ($sumMed >= 0);

if ($sumMed < 0) {
    echo 'El numero ' . $sumMed . ' es negativo';
}


