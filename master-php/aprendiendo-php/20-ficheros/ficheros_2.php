<?php

/* Copiar */
copy('texto.txt', 'texto_copy.txt') or die("Error al copiar");

/* Renombrar */
rename('texto_copy.txt', 'texto_renamed.txt');

/* Eliminar */
unlink('texto_renamed.txt') or die("Error al borrar");

if (file_exists('texto_renamed.txt')) {
    echo "El archivo existe";
}else {
    echo "El archivo no existe";
}