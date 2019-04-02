<?php

require_once 'configuracion.php';

Configuracion::setColor('Blue');
Configuracion::setEntorno('localhost');
Configuracion::setNewsletters(true);

echo Configuracion::$color . '<br>';
echo Configuracion::$newsletter . '<br>';
echo Configuracion::$entorno . '<br>';

$configuracion = new Configuracion();
$configuracion::$color = "Rojo";
echo $configuracion::$color;
var_dump($configuracion);