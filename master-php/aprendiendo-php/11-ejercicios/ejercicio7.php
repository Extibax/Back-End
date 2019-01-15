<?php

if (isset($_GET['firstN']) && isset($_GET['secondN'])) {

    $fistN = $_GET['firstN'];
    $secondN = $_GET['secondN'];

    if ($fistN < $secondN) {
        for ($i=$fistN; $i < $secondN; $i++) { 

            if ($i%2 != 0) {
                echo $i."<br>";
            }
            
        }
    }
    else {

        echo "El primer numero debe ser menor que el segundo";

    }
} else {
    
    echo "Ingrese los dos numeros por la URL";

}
