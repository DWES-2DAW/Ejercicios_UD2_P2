

<?php
/* 
 4. EJERCICIO
Hacer un programa en php que muestre el texto contenido en las variables llamadas nombre y edad. Si
nombre es NULL mostrara Hola desconocido, Si se declara un nombre X y edad es NULL mostrara Hola X,
No se tu edad Si se declara un nombre X y edad es Y mostrara Hola X, Tiene Y anos.

 */


/* $nombre = 'David';
$edad = 100;

if ($nombre == null) {
echo 'Hola desconocido';
}
elseif ($nombre != null && $edad == null ){
    echo 'Hola'. $nombre.' no se tu edad';
    
}
elseif ($nombre != null && $edad != null) {
    echo 'Hola '.$nombre.' tienes '.$edad.' años';
} */
    

$nombre = 'David';
$edad = 100;

switch (true) {
    case ($nombre == null):
        echo 'Hola desconocido';
        break;
    case ($nombre != null && $edad == null):
        echo 'Hola '. $nombre .', no se tu edad';
        break;
    case  ($nombre != null && $edad != null):
        echo 'Hola '.$nombre.', tienes '.$edad.' años';
}
?>