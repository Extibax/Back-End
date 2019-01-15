<?php

    //Condicionaless
    
    $color = 'Verde';

    if ($color == "Rojo") {
        echo 'El color es rojo';
    }else{
        echo 'El color no es rojo';
    }

    echo '<hr>';

    $dia = 4;

    switch ($dia) {
        case 1:
            echo 'Lunes';
            break;
        case 2:
            echo 'Martes';
            break;
        case 3:
            echo 'Miercoles';
            break;
        case 4:
            echo 'Jueves';
            break;
        case 5:
            echo 'Viernes';
            break;
    }

    //GOTO

    goto marca;

    echo '<h3>Instruccion 1</h3>';
    echo '<h3>Instruccion 2</h3>';
    echo '<h3>Instruccion 3</h3>';
    echo '<h3>Instruccion 4</h3>';

    marca:
    echo '<h3>Me he saltado los anteriores 4 echos</h3>';

?>