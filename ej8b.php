<?php

$alumnos = [['Nombre' => 'Juan Pérez', 'Edad' => 18, 'Altura' => 1.80], ['Nombre' => 'Aida López', 'Edad' => 21, 'Altura' => 1.65],['Nombre' => 'Vanessa Costa', 'Edad' => 34, 'Altura' => 1.65], ['Nombre' => 'Daniel García', 'Edad' => 16, 'Altura' => 1.78]]; 


$edadMedia=0;
$estaturaMedia=0;
$alumnosMas18= 0;
$alumnosMas175=0;
$numeroAlumnos=count($alumnos);

foreach ($alumnos as $alumno) {
    
if($alumno['Edad']>18){
   $alumnosMas18++;
} 

if($alumno['Altura']>1.75){
    $alumnosMas175++;
 } 
 
$estaturaMedia += ($alumno['Altura']);

$edadMedia+= ($alumno['Edad']);


}

$estaturaMedia/=$numeroAlumnos;
$edadMedia/=$numeroAlumnos;

echo "Estatura media es: $estaturaMedia<br>";
echo "Edad media es: $edadMedia<br>";
echo "Alumnos con mas de 18 años son: $alumnosMas18<br>";
echo "Alumnos con mas de 1.75 de estatura son  son: $alumnosMas175";
