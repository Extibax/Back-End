<?php

/* Variables locales:

 */

/* Variables globales:
    Las que se declaran fuera de una funcion y estan disponibles 
    dentro y fuera de la funcion
 */

 $frase = "Ni los genos son tan genios, ni los mediocres tan mediocres";

 echo $frase;

 function holaMundo() {
     /* Vriable global */
     global $frase;
     echo "<h1>$frase</h1>";

     /* Variable local */
     $year = 2019;
     echo "<h1>$year</h1>";

     return $year;
 }

echo holaMundo();

/* helloWorld() {
    echo $year;
} */