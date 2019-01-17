<?php

/*
Ejercicio 5: Crear un array con el contenido de la tabla:
ACCION  AVENTURA    DEPORTES
GTA     ASSASING    FIFA 19
COD     CRASH       PES 19
PUGB    PRINCE      MOTOGP19
cada columna debe ir en un fichero separado(includes)
 */

$Games = array(
    'Accion' => array('GTA', 'COD', 'Pugb'),
    'Aventuras' => array('Assasing Creed', 'Crash', 'Prince of Persia'),
    'Deportes' => array('Fifa 19', 'Pes 19', 'MotoGP19'),
);

?>

<table border="1">
    <?php
        include('includes/accion.php');
        include('includes/aventuras.php');
        include('includes/deportes.php');
    ?>
</table>