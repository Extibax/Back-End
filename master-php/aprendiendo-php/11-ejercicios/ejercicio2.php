<?php

/* Ejercicio 2: Imprimir por pantalla los numeros pares que hay del 1 al 100 con un Script en PHP */

for( $i=1; $i <= 100; $i++){
    if( $i%2 == 0 ){
        echo $i."<br>";
    }
}