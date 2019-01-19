<?php

$error = "Faltan_Valores";

if (empty($_POST['nombre']) && empty($_POST['apellidos']) && empty($_POST['edad'])
    && empty($_POST['email']) && empty($_POST['pass'])) {
        $error = "Ok";

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        $email = $_POST['pass'];
}else{
    $error = "Faltan_Valores";
    header("Location: index.php?error=$error");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Validacion de formularios PHP</title>
</head>
<body>

</body>
</html>
