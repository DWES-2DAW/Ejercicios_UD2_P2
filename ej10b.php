
<?php

$hoteles = array(array('Nombre' => 'Abashiri NH', 'Cat' => '3*', 'Hab' => 168, 'Poblacion' => '46013 Valencia', 'Direccion' => 'Avenida Ausias March, 59'), array('Nombre' => 'Abba Acteon (Abba Hoteles) NH', 'Cat' => '4*', 'Hab' => 189, 'Poblacion' => '46023 Valencia', 'Direccion' => 'Escultor Vicente Beltrán Grimal, 2'), array('Nombre' => 'Acta Atarazanas', 'Cat' => '4*', 'Hab' => 42, 'Poblacion' => '46011 Valencia', 'Direccion' => 'Plaza Tribunal de las Aguas, 4'), array('Nombre' => 'Acta del Carmen', 'Cat' => '3*', 'Hab' => 25, 'Poblacion' => '46003 Valencia', 'Direccion' => 'Blanquerías, 11'), array('Nombre' => 'AC Valencia (AC Hotels)', 'Cat' => '4*', 'Hab' => 183, 'Poblacion' => '46023 Valencia', 'Direccion' => 'Avenida de Francia, 67'), array('Nombre' => 'AdHoc Monumental Valencia', 'Cat' => '3*', 'Hab' => 128, 'Poblacion' => '46003 Valencia', 'Direccion' => 'Boix. 4'), array('Nombre' => 'Alkazar', 'Cat' => '1*', 'Hab' => 18, 'Poblacion' => '46002 Valencia', 'Direccion' => 'Mosén Femades, 11'));

$listadoHoteles = '';
$nombreHoteles = [];
/* $hotelesMas100=[]; */
$hotelesMas100 = '';
$hotelesMas3 = [];
$listadoHoteles3 = '';
/* $hotelesMas3='';
//mostrar listados hoteles
//mostrar listados hotele de mas de 100 hab.
//mostrar listados hoteles de menos de 100 hab. y 3 estrellas.
//borras el hotel Acta del Carmen  y borrar el listado de hoteles.
//borrar todos los hoteles y mostrar mensaje: no hay hoteles.
//añadir los siguientes hoteles Astoria Palace Y Balneario las Arenas.
*/
foreach ($hoteles as $hotel) {

    /* $listadoHoteles .= $hotel['Nombre']."<br>"; */
    $nombreHoteles[] = $hotel['Nombre'];

    if ($hotel['Hab'] > 100) {

        $hotelesMas100 .= $hotel['Nombre'] . "<br>";
        /* $hotelesMas100[]= $hotel['Nombre']; */
    }

    if ($hotel['Hab'] > 100 && $hotel['Cat'] === '3*') {

        $hotelesMas3[] = $hotel['Nombre'];
    }
}

foreach ($hoteles as $key => $hotel) {
    if ($hotel['Nombre'] === 'Acta del Carmen') {
        unset($hoteles[$key]);
        break;
    }
}



$listadoHoteles = implode("<br>", $nombreHoteles);
/* $hotelesMas100 = implode("<br>", $hotelesMas100); */
$listadoHoteles3 = implode("<br>", $hotelesMas3);

echo "Nombre de hoteles: <br>$listadoHoteles<br>";
echo "<br><br>hoteles con mas de 100 hab: <br>$hotelesMas100<br>";
echo "<br><br>hoteles con mas de 100 hab y 3 estrellas:<br>$listadoHoteles3<br>"; //borrar hoteles

$TodosHoteles = '';
$hoteles = [];



if (empty($hoteles)) {
    echo "<br><br>No hay hoteles.<br>";
} else {
    $nombresHoteles = array_column($hoteles, 'Nombre');
    echo "<br><br>Hoteles: $TodosHoteles<br>";
}

//añadir hoteles 
array_push(
    $hoteles,
    array('Nombre' => 'Astoria Palace', 'Cat' => '4*', 'Hab' => 204, 'Poblacion' => '46002 Valencia', 'Direccion' => 'Plaza Rodrigo'),
    array('Nombre' => 'Arenas', 'Cat' => 'Lujo', 'Hab' => 254, 'Poblacion' => '46011 Valencia', 'Direccion' => 'Eugenia Viñes')
);

foreach ($hoteles as $hotel) {
    echo $hotel['Nombre'] . "<br>";
};
