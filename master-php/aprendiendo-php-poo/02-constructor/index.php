<h1>Hello World</h1>

<?php 

require_once 'coche.php';

$coche1 = new Coche("Amarillo", "Renault", "Cli", 150, 200, 5);
$coche2 = new Coche("Verde", "Seat", "Panda", 200, 200, 5);
$coche3 = new Coche("Azul", "Citroen", "Xara", 100, 220, 4);
$coche4 = new Coche("Rojo", "Mercedes", "Clase A", 350, 100, 3);

$coche1->color ="Rosa";
$coche1->setMarca("Audi");

var_dump($coche1->getModelo());

var_dump($coche1);

?>