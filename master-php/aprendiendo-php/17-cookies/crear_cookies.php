<?php

/* 
    Cokkie: Es un fichero que se almacena en el ordenador del usuario que visita
    la web, con el fin de recordar datos o rastrear cierta informacion o comportamiento
    del mismo en la web.
*/

/* Crear cookie */
/* setcookie("nombre", "valorQueSoloPuedeSerTexto", caducidad, ruta, dominio); */

/* Cookie basica */
setcookie("myCookie", "Valor de mi Cookie");

/* Cokkie con expiracion */
setcookie("oneYear", "Valor de mi cookie de 365 dias", time()+(60*60*24*365));

?>

<a href="ver_cookies.php">Ver Cookies</a>