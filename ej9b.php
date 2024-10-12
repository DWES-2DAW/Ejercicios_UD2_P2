<?php
//Inicializamos el array 
$facturas = array(array('Codigo' => 'JKL', 'Cantidad' => 1800, 'Precio' => 1.8), array('Codigo' => 'LMN', 'Cantidad' => 210, 'Precio' => 1.75), array('Codigo' => 'DTT', 'Cantidad' => 340, 'Precio' => 1.65), array('Codigo' => 'JKL', 'Cantidad' => 160, 'Precio' => 1.78), array('Codigo' => 'PID', 'Cantidad' => 860, 'Precio' => 1.99));

$facturaTotal = 0;
$litrosVendidos1 = 0;
$facturaMas600 = 0;
$NumFacturas = count($facturas);

foreach ($facturas as $factura) {

    if ($factura['Codigo'] === 'JKL') {
        $litrosVendidos1 += $factura['Cantidad'];
    }

    $totalFactura = $factura['Cantidad'] * $factura['Precio'];

    if ($totalFactura > 600) {
        $facturaMas600++;
    }

    $facturaTotal += $totalFactura;
}

echo "Litros Vendidos articulo 1: $litrosVendidos1<br>";
echo "Facturas de mas de 600€:" . number_format($facturaMas600, 1) . "<br>";
echo "Facturación Total es:" . number_format($facturaTotal, 2);
