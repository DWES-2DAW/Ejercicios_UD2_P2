<?php

/* 9.EJERCICIO 9
Una empresa necesita una página para gestionar las facturas. En cada factura figura: el código
del artículo, la cantidad vendida en litros y el precio por litro. Se pide introducir en un array
multidimensional 5 facturas introducidas e indicar la Facturación total, cantidad en litros
vendidos del artículo 1 y cuantas facturas se emitieron de más de 600 €. */


$facturas = [
    ['codigo' => 1, 'litros' => 1000, 'precio' => 1.86],
    ['codigo' => 2, 'litros' => 1300, 'precio' => 0.88],
    ['codigo' => 1, 'litros' => 1500, 'precio' => 0.2],
    ['codigo' => 3, 'litros' => 2300, 'precio' => 1.53],
    ['codigo' => 1, 'litros' => 4100, 'precio' => 0.06]
];

$totalFacturacion = 0;
$totalLitrosArticulo1 = 0;
$facturasMas600 = 0;

foreach ($facturas as $factura) {
    $totalFactura = $factura['litros'] * $factura['precio'];
    $totalFacturacion += $totalFactura;

    if ($factura['codigo'] == 1) {
        $totalLitrosArticulo1 += $factura['litros'];
    }

    if ($totalFactura > 600) {
        $facturasMas600++;
    }
}

echo "La facturación total es: $totalFacturacion \n";
echo "Cantidad en litros vendidos del artículo 1: $totalLitrosArticulo1 \n";
echo "Cantidad de facturas de más de 600 €: $facturasMas600 \n";
