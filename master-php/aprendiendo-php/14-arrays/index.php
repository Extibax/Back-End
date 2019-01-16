<?php

/* 
    Arrays:
    Una array es una coleccion o un cojunto de datos/valores
    bajo un unico nombre y para acceder a esas variables
    tenemos que usar un indice numero o alfanumerico
*/

$pelicula = "Batman";
$peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');
$cantantes = ['2pac', 'Drake', 'Jennifer Lopez'];

var_dump($peliculas);

/* echo $peliculas[1]; */

/* var_dump($cantantes); */

echo $peliculas[0];
echo "<br>";
echo $cantantes[2];