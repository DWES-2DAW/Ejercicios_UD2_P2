<?php

/* 7.EJERCICIO 7
Crear un array de 10 números y mostrar la media de los números positivos, la media de los
números negativos y la cantidad de ceros. */


$numbers = [];
for ($i = 0; $i < 10; $i++) {
    $numbers[] = random_int(-100, +100);
}
/* 
var_dump( $numbers); */
$numPos = [];
$numNeg = [];
$countZero = 0;

for ($i = 0; $i < count($numbers); $i++) {

    if ($numbers[$i] > 0) {
        array_push($numPos, $numbers[$i]);
    } else if ($numbers[$i] < 0) {
        array_push($numNeg, $numbers[$i]);
    } else if ($numbers[$i] == 0) {
        $countZero++;
    }
}

 echo "Cantidad de números cero $countZero \n";

$medPos = array_sum($numPos);

$totalPos = $medPos / count($numPos);

$medNeg = array_sum($numNeg);

$totalNeg = $medNeg / count($numNeg);


echo "Media de números positivos $totalPos \n";
echo "Media de números negativos $totalNeg ";

/* _____________________________________________ */


$numbers = [];
for ($i = 0; $i < 10; $i++) {
    $numbers[] = random_int(-100, +100);
}

$sumPos = 0;
$sumNeg = 0;
$countPos = 0;
$countNeg = 0;
$countZero = 0;

foreach ($numbers as $num) {
    if ($num > 0) {
        $sumPos += $num;
        $countPos++;
    } else if ($num < 0) {
        $sumNeg += $num;
        $countNeg++;
    } else {
        $countZero++;
    }
}

echo "Cantidad de números cero: $countZero \n";

if ($countPos > 0) {
    $avgPos = $sumPos / $countPos;
    echo "Media de números positivos: $avgPos \n";
}

if ($countNeg > 0) {
    $avgNeg = $sumNeg / $countNeg;
    echo "Media de números negativos: $avgNeg \n";
}
