<!-- 
10.
EJERCICIO
Crear las variables código, nombre, apellidos, puesto, sueldo, edad, num_hijos y sucursal e inicializarlas con
los siguientes valores:
codigo
1
nombre
Tom
apellidos
Smith
Realizar los siguientes cálculos de retenciones:
sueldo y en caso contrario el 20%
sueldo y en caso contrario el 10%
puesto
Vendedor
sueldo
75000
edad
26
num_hijos
0
sucursal
New York
Retención 1.- Si es Vendedor y el Sueldo mayor a 70000 aplicar una retención del 10% sobre el
Retención 2.- Si tiene más de 50 años o más de 2 hijos aplicar una retención del 5% sobre el
Retención 3.- Si el sueldo es mayor de 50000 y menor de 80000 aplicar una retención del 5%
sobre el sueldo y en caso contrario el 12%
Retención 4.- Si tiene 1 o 2 hijos aplicar una retención del 10% sobre el sueldo y en caso
contrario el 5%
Retención 5.- Si el sueldo es mayor de 80000 o no tiene hijos aplicar una retención del 15%
sobre el sueldo y en caso contrario el 5%  -->

<!DOCTYPE html>
<html>
<head>
    <title>Ej10</title>
</head>
<body>
    <form action="" method="post">
        <label for="codigo">Código:</label><br>
        <input type="number" id="codigo" name="codigo"><br>
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="apellidos">Apellidos:</label><br>
        <input type="text" id="apellidos" name="apellidos"><br>
        <label for="puesto">Puesto:</label><br>
        <input type="text" id="puesto" name="puesto"><br>
        <label for="sueldo">Sueldo:</label><br>
        <input type="number" id="sueldo" name="sueldo"><br>
        <label for="edad">Edad:</label><br>
        <input type="number" id="edad" name="edad"><br>
        <label for="num_hijos">Número de Hijos:</label><br>
        <input type="number" id="num_hijos" name="num_hijos"><br>
        <label for="sucursal">Sucursal:</label><br>
        <input type="text" id="sucursal" name="sucursal"><br>
        <input type="submit" value="Calcular Retenciones">
    </form>
</body>
</html>

<?php
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$puesto = $_POST['puesto'];
$sueldo = $_POST['sueldo'];
$edad = $_POST['edad'];
$num_hijos = $_POST['num_hijos'];
$sucursal = $_POST['sucursal'];

$retencion1 = ($puesto == "Vendedor" && $sueldo > 70000) ? $sueldo * 0.10 : $sueldo * 0.20;
$retencion2 = ($edad > 50 || $num_hijos > 2) ? $sueldo * 0.05 : $sueldo * 0.10;
$retencion3 = ($sueldo > 50000 && $sueldo < 80000) ? $sueldo * 0.05 : $sueldo * 0.12;
$retencion4 = ($num_hijos >= 1 && $num_hijos <= 2) ? $sueldo * 0.10 : $sueldo * 0.05;
$retencion5 = ($sueldo > 80000 || $num_hijos == 0) ? $sueldo * 0.15 : $sueldo * 0.05;

$total_retenciones = $retencion1 + $retencion2 + $retencion3 + $retencion4 + $retencion5;

echo "El total de las retenciones es: " . $total_retenciones;
?>
