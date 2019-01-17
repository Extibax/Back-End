<?php

/*
Ejercicio 1: Hacer un programa en PHP que tenga un array con 8 numeros
entero y que haga lo siguiente:
1:Tiene que recorrerlo y mostrarlo.
2:Tiene que ordenarno y mostrarlo.
3:Tiene que mostrar su longitud
4:Buscar algun elemento. (Buscar por el parametro que llegue por el URL).
 */

/* Crear el array */
$firstArray = array(1, 3, 8, 4, 6, 9, 2, 3);

/* Funcion Mostrar Array */
function mostrarArray($array)
{
    $resultado = "";

    foreach ($array as $fArray) {
        $resultado .= $fArray . "<br>";
    }
    return $resultado;
}

/* Recorrer y mostrar */
echo "<h1>Mostar</h1>";

echo mostrarArray($firstArray);

echo "<hr>";

/* Ordenar y mostrar */
echo "<h1>Ordenar y mostrar</h1>";

asort($firstArray);

echo mostrarArray($firstArray);

echo "<hr>";

/* Longitud del array */
echo "<h1>Longitud</h1>";

echo "<br>";

echo count($firstArray);

/* Busqueda del array */
if (isset($_GET['numero'])) {

    $busqueda = $_GET['numero'];

    echo "<h1>Buscar</h1>";

    $search = array_search($busqueda, $firstArray);
    if (!empty($search)) {
        echo "<h4>Existe el numero en el indice: " . $search . "</h4>";
    } else {
        echo "<h4>No existe el numero</h4>";
    }

}