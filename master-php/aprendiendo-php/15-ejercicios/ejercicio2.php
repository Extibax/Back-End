<?php

/*
Ejercicio 2: Escribir un programa con PHP que añada valores a un array mientras que su
longitud sea menor a 120 y luego mostrarlo por pantalla.
 */

$numero = array(1);

for ($i=1; $i <= 120; $i++) { 
    array_push($numero, "elemento: ".$i);
    echo "<br>";
    echo $numero[$i];
}