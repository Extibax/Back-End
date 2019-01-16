<?php

function calculator($num1, $num2, $negrita = false)
{

    $sum = $num1 + $num2;
    $rest = $num1 - $num2;
    $multi = $num1 * $num2;
    $divi = $num1 / $num2;

    $text_string = "";

    if ($negrita) {
        $text_string .= "<h1>";
    }

    $text_string .= "Addition : $sum <br>";
    $text_string .= "Subtraction : $rest <br>";
    $text_string .= "Multiplication : $multi <br>";
    $text_string .= "Divition : $divi <br>";

    if ($negrita) {
        $text_string .= "</h1>";
    }

    return $text_string;
}

echo calculator(15, 30);

echo calculator(15, 30, true);

echo calculator(15, 30, false);

function getFirstName($fname)
{
    $text = "The Fisrt Name is: $fname";
    return $text;
}

function getLastName($lname)
{
    $text = "The Last Name is: $lname";
    return $text;
}

function returnFullName($fname, $lname)
{
    $text_string = getFirstName($fname)
    . "<br>" . getLastName($lname);
    return $text_string;
}

echo returnFullName("Juan", "Bedoya");