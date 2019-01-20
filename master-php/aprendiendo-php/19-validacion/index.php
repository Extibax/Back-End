<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacion de Formulario</title>
</head>

<body>
    <h1>Validar Formulario</h1>

<?php
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error == 'Faltan_Valores') {
        echo "<strong style='color: red;'>Introduce los datos correctamente</strong>";
    }
    if ($error == 'nombre') {
        echo "<strong style='color: red;'>Introduce bien el nombre</strong>";
    }
    if ($error == 'apellidos') {
        echo "<strong style='color: red;'>Los apellidos no son correctos</strong>";
    }
    if ($error == 'edad') {
        echo "<strong style='color: red;'>Introduce una edad correcta</strong>";
    }
    if ($error == 'email') {
        echo "<strong style='color: red;'>El correo es erroneo</strong>";
    }
    if ($error == 'pass') {
        echo "<strong style='color: red;'>Introduce una contraseña de mas de 5 letras</strong>";
    }
}
?>

    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre</label>
        <p>
            <input type="text" name="nombre" required pattern="[A-Za-z]+">
        </p>
        <label for="apellidos">Apellidos</label>
        <p>
            <input type="text" name="apellidos" required pattern="[A-Za-z]+">
        </p>
        <label for="edad">Edad</label>
        <p>
            <input type="number" name="edad" required pattern="[0-9]+">
        </p>
        <label for="email">Email</label>
        <p>
            <input type="email" name="email"  required>
        </p>
        <label for="pass">Contraseña</label>
        <p>
            <input type="password" name="pass" required>
        </p>

        <input type="submit" value="Enviar Datos">
    </form>
</body>

</html>