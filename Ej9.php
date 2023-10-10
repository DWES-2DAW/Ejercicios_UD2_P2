<!-- 
/* 
9. EJERCICIO
Crear una pagina que calcule el importe final de una factura. Debemos crear dos variables que contendran el
precio de un producto y las unidades adquiridas. Ademas, crear una constante llamada IVA del 21%.
Debemos calcular y devolver el precio del producto, las unidades adquiridas, el importe base de la factura, el
importe del IVA y el importe final de la factura */ -->

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Factura</title>
</head>
<body>
    <form action="" method="post">
        <label for="price">Precio del Producto:</label><br>
        <input type="number" id="productPrice" name="price" required><br>
        <label for="units">Unidades Adquiridas:</label><br>
        <input type="number" id="units" name="units" required><br>
        <input type="submit" value="Calcular Factura">
    </form>
    <p>-----------------------</p>
</body>
</html>


<?php

define ("IVA",0.21);

$price = $_POST['price'];
$units = $_POST['units'];


$amount = $price * $units;

$amountIva = $amount * IVA;
$totalBill = $amount + $amountIva;

echo "Precio del Producto: " . $price . "<br>";
echo "Unidades Adquiridas: " . $units . "<br>";
echo "Importe Base de la Factura: " . $amount . "<br>";
echo "Importe del IVA: " . $amountIva . "<br>";
echo "Importe Final de la Factura: " . $totalBill;
?>