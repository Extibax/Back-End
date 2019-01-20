<?php

/*
Ejercicio 2:
1. Una Funcion.
2. Validar un email con filter_var
3. Recoger una variable por GET y validarla
4.Mostrar el resultado
 */

function validateEmail($email)
{
    $status = "Email no valido";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)):
        $status = "Email validado correctamente";
    endif;

    return $status;
}

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Ejericio 2</title>
  </head>
  <body>
    <h1>Validation of an Email</h1>
    <form action="" method="POST">
        <input type="text" name="email">
        <input type="submit" value="Enviar">
    </form>
  </body>
</html>

<?php
if (isset($_POST['email'])):
    echo "<h4>" . validateEmail($_POST['email']) . "</h4>";
endif;
?>
