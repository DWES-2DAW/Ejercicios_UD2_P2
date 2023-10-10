<?php

/* 8.EJERCICIO 8
Dadas las edades y alturas de 5 alumnos introducidos en un array, mostrar la edad y la
estatura media, la cantidad de alumnos mayores de 18 años, y la cantidad de alumnos que
miden más de 1.75 */

$alumnos = [
    ['edad' => 20, 'altura' => 1.80],
    ['edad' => 17, 'altura' => 1.70],
    ['edad' => 19, 'altura' => 1.85],
    ['edad' => 18, 'altura' => 1.65],
    ['edad' => 21, 'altura' => 1.78]
];

$sumaEdades = 0;
$sumaAlturas = 0;
$mayores18 = 0;
$altos = 0;

foreach ($alumnos as $alumno) {
    $sumaEdades += $alumno['edad'];
    $sumaAlturas += $alumno['altura'];

    if ($alumno['edad'] > 18) {
        $mayores18++;
    }

    if ($alumno['altura'] > 1.75) {
        $altos++;
    }
}

$mediaEdad = $sumaEdades / count($alumnos);
$mediaAltura = $sumaAlturas / count($alumnos);

echo "La edad media es: $mediaEdad \n";
echo "La altura media es: $mediaAltura \n";
echo "Cantidad de alumnos mayores de 18 años: $mayores18 \n";
echo "Cantidad de alumnos que miden más de 1.75: $altos \n";


