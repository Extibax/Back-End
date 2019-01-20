<?php

if (!is_dir('myFolder')) {
    mkdir('myFolder', 0777) or die('No se puede crear la carpeta');
}else {
    echo "Ya existe la carpeta";
}

/* Eliminar carpeta */
//rmdir('myFolder');

echo "<br><hi>Contenido de la carpeta</h1><br>";

if ($gestor = opendir('./myFolder')) {
    while (false !== ($archivo = readdir($gestor))) {
        if ($archivo !== '.' && $archivo != '..') {
            echo $archivo."<br>";
        }
    }
}