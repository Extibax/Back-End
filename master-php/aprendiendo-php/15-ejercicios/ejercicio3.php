<?php

/*
Ejercicio 3: Programa que compruebe si una variable esta vacia y si esta vacia
rellenar con texto en minusculas y mostrarlo en mayusculas y negrita.
 */

$variableVacia = "";
$variable = "Variable con relleno";

function comprobarVar($var)
{
    if (empty($var)) {
        $var = "Texto de relleno";
        echo strtolower($var);
    } else {
        strtoupper($var);
        echo "<strong>".strtoupper($var)."</strong>";
    }
}

comprobarVar($variable);