<?php
/*
Ejercicio 3:hacer una interfaz de usuario con 2 inputs y 4 botones,
uno para sumar, restar, multiplicar y dividir
 */

$resultado = false;

if (isset($_POST['num1']) && isset($_POST['num2'])):
    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    switch (strtolower($_POST['operacion'])):
        case 'sumar':
            $resultado = $numero1 + $numero2;
            break;
        case 'restar':
            $resultado = $numero1 - $numero2;
        case 'multiplicar':
            $resultado = $numero1 * $numero2;
            break;
        case 'dividir':
            $resultado = $numero1 / $numero2;
            break;

        default:
            echo "No se detecto el tipo de operacion a realizar";
            break;
    endswitch;
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculador PHP</title>
</head>

<body>
    <h1>Calculador PHP</h1>
    <form action="" method="POST">
        <label for="num1">Primer numero:</label>
        <p><input type="text" name="num1" required></p>
        <label for="num2">Segundo numero:</label>
        <p><input type="text" name="num2" required></p>

        <input type="submit" value="Sumar" name="operacion">
        <input type="submit" value="Restar" name="operacion">
        <input type="submit" value="Multiplicar" name="operacion">
        <input type="submit" value="Dividir" name="operacion">
    </form>
</body>

</html>

<?php
if ($resultado):
    echo "<h4>El resultado de la operacion es: $resultado</h4>";
endif;
?>