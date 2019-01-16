<?php

$br = "<br>";

/* Debuggear */

$nombre = "Juan Bedoya";
var_dump($nombre);

/* Fechas */
echo date('d-m-y');
echo "<br>";
echo time();

/* Matematicas */
echo "<br>";
echo "Raiz cuadrada de 10: ".sqrt(10);

echo "<br>";
echo "Numero aleatorio entre 10 y 40: ".rand(10, 40);

echo "<br>";
echo "Numero pi: ".pi();

echo "<br>";
echo "Redondear: ".round(7.891234, 2);

/* Mas funciones globales */
echo "<br>";
echo gettype($nombre);

/* Detectar tipado */
if (is_int($nombre)) {
    echo "<br>";
    echo "Es un entero";
}else {
    echo "<br>";
    echo "No es un un entero";
}

/* Comprobar si existe una variable */
echo "<br>";
if(isset($nombre)) {
    echo "La variable existe";
}else {
    echo "La variable no existe";
}

/* Limpiar espacios */
echo "<br>";
$frase = "      Mi contenido        ";
echo var_dump(trim($frase));

/* Eliminar variables o indices de arrays */
echo $br;
$year = 2020;
unset($year);
/* var_dump($year); */

/* Comprobar variable vacia */
$texto = "";

if (empty($texto)) {
    echo "Texto esta vacio";
}else {
    echo "Texto no esta vacio";
}

/* Contar caracteres de un String */
echo $br;
$cadena = "12345";
echo strlen($cadena);

/* Encontrar caracter */
echo $br;
$frase = "La vida es bella";
echo strpos($frase, "vida");

/* Reemplazar contenido de un String */
echo $br;
$frase = str_replace("vida", "moto", $frase);
echo $frase;

/* Mayusculas y minusculas */
echo $br;
echo strtolower($frase);
echo $br;
echo strtoupper($frase);