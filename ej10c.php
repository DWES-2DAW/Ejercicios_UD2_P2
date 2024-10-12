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

//  nombres de hoteles
function listarHoteles($hoteles) {
    return implode("<br>", array_column($hoteles, 'Nombre'));
}

//+hoteles con más de 100 hab.
function obtenerHotelesMasDe100($hoteles) {
    $resultados = array_filter($hoteles, function($hotel) {
        return $hotel['Hab'] > 100;
    });
    return implode("<br>", array_column($resultados, 'Nombre'));
}

//  hoteles con  100 hab y 3*
function obtenerHotelesMasDe100y3Estrellas($hoteles) {
    $resultados = array_filter($hoteles, function($hotel) {
        return $hotel['Hab'] > 100 && $hotel['Cat'] === '3*';
    });
    return implode("<br>", array_column($resultados, 'Nombre'));
}

// borrar un hotel por nombre
function borrarHotelPorNombre(&$hoteles, $nombre) {
    foreach ($hoteles as $key => $hotel) {
        if ($hotel['Nombre'] === $nombre) {
            unset($hoteles[$key]);
            return true; 
        }
    }
    return false; 
}

//  añadir hoteles
function añadirHoteles(&$hoteles, $nuevosHoteles) {
    foreach ($nuevosHoteles as $nuevoHotel) {
        $hoteles[] = $nuevoHotel;
    }
}

// Mostrar todos los hoteles al inicio
echo "<h2>Lista de Hoteles</h2>";
echo listarHoteles($hoteles);

//   hoteles con más de 100 habitaciones
echo "<h2>Hoteles con más de 100 habitaciones</h2>";
echo obtenerHotelesMasDe100($hoteles);

//  hoteles con más de 100 habitaciones y 3 estrellas
echo "<h2>Hoteles con más de 100 habitaciones y 3 estrellas</h2>";
echo obtenerHotelesMasDe100y3Estrellas($hoteles);

// Borrar el hotel 
borrarHotelPorNombre($hoteles, 'Acta del Carmen');

// Comprobar si hay hoteles 
if (empty($hoteles)) {
    echo "<br><br>No hay hoteles.<br>";
} else {
    echo "<h2>Hoteles después de eliminar 'Acta del Carmen'</h2>";
    echo listarHoteles($hoteles);
}

// nuevos hoteles
$nuevosHoteles = [
    array('Nombre' => 'Astoria Palace', 'Cat' => '4*', 'Hab' => 204, 'Poblacion' => '46002 Valencia', 'Direccion' => 'Plaza Rodrigo'),
    array('Nombre' => 'Arenas', 'Cat' => 'Lujo', 'Hab' => 254, 'Poblacion' => '46011 Valencia', 'Direccion' => 'Eugenia Viñes')
];
añadirHoteles($hoteles, $nuevosHoteles);

// echo hoteles añadidos
echo "<h2>Hoteles tras añadir nuevos</h2>";
echo listarHoteles($hoteles);

?>
