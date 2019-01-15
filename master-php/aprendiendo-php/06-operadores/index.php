<?php

    //Operadores aritmeticos

    $numero1 = 55;
    $numero2 = 33;

    echo 'Suma: '.($numero1+$numero2).'<hr>';
    echo 'Resta: '.($numero1-$numero2).'<hr>';
    echo 'Multi: '.($numero1*$numero2).'<hr>';
    echo 'Divi: '.($numero1/$numero2).'<hr>';
    echo 'Modulo: '.($numero1%$numero2).'<hr>';

    //Operadores de incremento y decremento

    $year = 2019;

    $year++;
    $year--;

    ++$year;
    --$year;

    echo '<h1>'.$year.'</h1>';

    //Operadores de asignacion

    $edad = 55;

    echo $edad.'<hr>';

    echo ($edad=+5).'<hr>';

    echo ($edad=-5).'<hr>';

?>