<?php

/* 
    Para mostrar el valor de las cookies, Tengo que usar $_COOKIE
    , Es un array asociativo.
*/

if (isset($_COOKIE['myCookie'])) {
    echo "<h1>".$_COOKIE['myCookie']."</h1>";
}else{
    echo "No existe la Cookie";
}