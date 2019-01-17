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
$personas = array(
    'nombre' => 'Juan',
    'apellidos' => 'Bedoya',
    'Web' => 'extibax.com',
);

var_dump($peliculas);

var_dump($personas['nombre']);

/* echo $peliculas[1]; */

/* var_dump($cantantes); */

echo $peliculas[0];
echo "<br>";
echo $cantantes[2];

/* Recorrer con FOR */
echo "<h1>Listado de peliculas</h1>";
echo "<ul>";
for ($i = 0; $i < count($peliculas); $i++) {
    echo "<li>" . $peliculas[$i] . "</li>";
}
echo "</ul>";

/* Recorrer con FOREACH */
echo "<ul>";
foreach ($cantantes as $cantante) {
    echo "<li>" . $cantante . "</li>";
}
echo "</ul>";

/* Arrays multidimencionales */

$contactos = array(
    array(
        'nombre' => 'Juan',
        'email' => 'extibax@gmail.com',
    ),
    array(
        'nombre' => 'Daniela',
        'email' => 'daniela@gmail.com',
    ),
    array(
        'nombre' => 'Mia',
        'email' => 'mia@gmail.com',
    ),
);

/* echo $contactos[1]['nombre']; */

foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}