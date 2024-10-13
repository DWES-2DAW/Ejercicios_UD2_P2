<?php

$hoteles = array(
    array('Nombre' => 'Abashiri NH', 'Cat' => '3*', 'Hab' => 168, 'Poblacion' => '46013 Valencia', 'Direccion' => 'Avenida Ausias March, 59'),
    array('Nombre' => 'Abba Acteon (Abba Hoteles) NH', 'Cat' => '4*', 'Hab' => 189, 'Poblacion' => '46023 Valencia', 'Direccion' => 'Escultor Vicente Beltrán Grimal, 2'),
    array('Nombre' => 'Acta Atarazanas', 'Cat' => '4*', 'Hab' => 42, 'Poblacion' => '46011 Valencia', 'Direccion' => 'Plaza Tribunal de las Aguas, 4'),
    array('Nombre' => 'Acta del Carmen', 'Cat' => '3*', 'Hab' => 25, 'Poblacion' => '46003 Valencia', 'Direccion' => 'Blanquerías, 11'),
    array('Nombre' => 'AC Valencia (AC Hotels)', 'Cat' => '4*', 'Hab' => 183, 'Poblacion' => '46023 Valencia', 'Direccion' => 'Avenida de Francia, 67'),
    array('Nombre' => 'AdHoc Monumental Valencia', 'Cat' => '3*', 'Hab' => 128, 'Poblacion' => '46003 Valencia', 'Direccion' => 'Boix. 4'),
    array('Nombre' => 'Alkazar', 'Cat' => '1*', 'Hab' => 18, 'Poblacion' => '46002 Valencia', 'Direccion' => 'Mosén Femades, 11')
);


//************************************************ */
//  nombres de hoteles ( solo nombre)
function lista_hoteles($hoteles)
{
    return implode("<br>", array_column($hoteles, 'Nombre'));
}


//  nombres de hoteles ( todo)
function mostrar_hoteles($hoteles)
{
    $listadoHoteles = '';
    foreach ($hoteles as $hotel) {
        $listadoHoteles .= "Nombre: " . $hotel['Nombre'] . "<br>" . "Categoría: " . $hotel['Cat'] . "<br>" .
            "Habitaciones: " . $hotel['Hab'] . "<br>" .
            "Población: " . $hotel['Poblacion'] . "<br>" .
            "Dirección: " . $hotel['Direccion'] . "<br><br>";
    }
    return $listadoHoteles;
}

//**************************************************************** */

//  nombres de hoteles ( todo)
function listar_hoteles($hoteles)
{
    return implode("<br><br>", array_map(function ($hotel) {
        return "Nombre: " . $hotel['Nombre'] . "<br>" .
            "Categoría: " . $hotel['Cat'] . "<br>" .
            "Habitaciones: " . $hotel['Hab'] . "<br>" .
            "Población: " . $hotel['Poblacion'] . "<br>" .
            "Dirección: " . $hotel['Direccion'];
    }, $hoteles));
}
/* echo mostrarHoteles($hoteles); */
/* echo lista_hoteles($hoteles); */

//********************************************************************** */

//+hoteles con más de 100 hab.

function mostrar_hoteles_mas100($hoteles, $valor)
{

    $resultado = array_filter($hoteles, function ($hotel) use ($valor) {
        return $hotel['Hab'] > $valor;
    });

    $nombreHoteles = array_column($resultado, 'Nombre');
    return implode("<br>", $nombreHoteles);
}



function mostrar_hoteles_mas100_otra($hoteles, $valor)
{

    $hotelesMas100 = '';
    foreach ($hoteles as $hotel) {

        if ($hotel['Hab'] > $valor) {

            $hotelesMas100 .= $hotel['Nombre'] . "<br>";
        }
    }
    return $hotelesMas100;
}

$valor = 100;
echo mostrar_hoteles_mas100_otra($hoteles, $valor);


//**************************************************************** */

//eliminar Hotel 


function eliminar_hotel ($hoteles,$nombre){


    foreach ($hoteles as $key => $hotel) {
        if ($hotel['Nombre'] === $nombre) {
            unset($hoteles[$key]);
            break;
        }
    }
    return $hoteles;
}


echo mostrar_Hoteles($hoteles);

$hoteles = eliminar_hotel($hoteles,'Acta del Carmen');

echo "<br>********<br>";
echo mostrar_Hoteles($hoteles);