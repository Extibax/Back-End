<?php

/* 
    Ejercicio 4: Crear un script en PHP que tenga 4 variables una
    de tipo array otra de tipo String, otra int y otra booleana y que
    imprima un mensaje segun el tipo de variable que sea.
*/ 

$array = array();
$string = "";
$int = 5;
$boolean = true;

echo gettype($array);
echo "<br>";
echo gettype($string);
echo "<br>";
echo gettype($int);
echo "<br>";
echo gettype($boolean);
echo "<br>";