<?php

function buenosDias() {
    return "Hola: Buenos dias :)";
}

function buenasTardes() {
    return "Hey: que tal ha ido la comida";
}

function buenasNoches() {
    return "Te vas a dormir ya?, Buenas noches!";
}

$horario = "Noches";

$miFuncion = "buenas".$horario;

echo $miFuncion();