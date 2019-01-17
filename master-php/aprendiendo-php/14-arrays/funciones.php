<?php

$cantantes = ['2pac', 'Drake', 'Jennifer Lopez', 'Alfredo'];
$numeros = [1, 7, 3, 8, 5];

/* Ordenar */
asort($cantantes);
asort($numeros);

/* Añadir elementos array */
$cantantes[] = "Natos";
array_push($cantantes, "Waor", "Wear");

/* Eliminar elementos array */
array_pop($cantantes);
unset($cantantes[2]);

/* Aleatorio */
$indice = array_rand($cantantes);
echo $cantantes[$indice];

/* Dar la vuelta */
var_dump(array_reverse($numeros));

/* Buscar dentro de un array */
$resultado = array_search('Drake', $cantantes);
var_dump($resultado);

/* Contar numero de elementos */
echo count($cantantes);
echo sizeof($cantantes);