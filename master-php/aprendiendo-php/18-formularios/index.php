<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formularios PHP y HTML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <p><input type="text" name="nombre" id="" autofocus></p><br>
        <label for="apellido">Apellido:</label>
        <p><input type="text" name="apellido" pattern="[A-Z ]+"></p><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>