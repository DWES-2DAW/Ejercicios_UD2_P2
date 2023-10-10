<?php

/* mostrar la tabla del 2 hasta 2x10  */
/* 
$table2 = 2;
echo "Tabla del 2 \n***********\n";
for ($i = 1; $i <= 10; $i++) {
    $result = $table2 * $i;

    echo " 2 X $i = $result" . "\n";
}
echo ".......";

 */


function table($number) {
    echo "Tabla del $number \n***********\n";
    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo " $number X $i = $result" . "\n";
    }
    echo ".......\n";
}

table(2);
