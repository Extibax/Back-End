<?php

if(isset($_GET['firstN']) && isset($_GET['secondN'])){

    $firstNumber = $_GET['firstN'];
    $secondNumber = $_GET['secondN'];

    $sum = $firstNumber + $secondNumber;
    $rest = $firstNumber - $secondNumber;
    $multiplication = $firstNumber * $secondNumber;
    $division = $firstNumber / $secondNumber;

    echo "<h1>La suma es: $sum</h1>";
    echo "<h1>La resta es: $rest</h1>";
    echo "<h1>La multi es: $multiplication</h1>";
    echo "<h1>La divi es: $division</h1>";

}else {

    echo "<h1>Introduzca los numeros correctamente por la URL :)</h1>";
    
}