<?php

/* Abrir Archivo */
$archivo = fopen("texto.txt", "a+");

/* Leer Archivo */
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido."<br>";
}

/* Escribir Archivo */
fwrite($archivo, "Soy un texto metido desde PHP");

/* Cerrar Archivo */
fclose($archivo);