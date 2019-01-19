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
        <p><input type="text" name="nombre" id="" autofocus></p>

        <label for="apellido">Apellido:</label>
        <p><input type="text" name="apellido" pattern="[A-Z ]+"></p>

        <label for="">Sexo:</label>
        <p>
            Hombre <input type="checkbox" name="sexo" value="Hombre">
            Mujer <input type="checkbox" name="sexo" value="Mujer">
        </p>

        <label for="fecha">Color:</label>
        <p><input type="color" name="color"></p>

        <label for="fecha">Fecha:</label>
        <p><input type="date" name="apellido"></p>

        <label for="correo">Email:</label>
        <p><input type="email" name="correo" id=""></p>

        <label for="archivo">Archivo:</label>
        <p><input type="file" name="archivo" id=""></p>

        <label for="numero">Numero:</label>
        <p><input type="number" name="numero" id=""></p>

        <label for="contraseña">Contraseña:</label>
        <p><input type="password" name="contraseña" id=""></p>

        <label for="continente">Continente:</label>
        <p>
            Sur America <input type="radio" name="continente" id="" value="America del Sur">
            Norte America <input type="radio" name="continente" id="" value="America del Norte">
            Asia <input type="radio" name="continente" id="" value="America del Asia">
        </p>

        <label for="url">URL:</label>
        <p><input type="url" name="url" id=""></p>

        <label for="areatexto">Area de texto:</label>
        <p><textarea name="areatexto" id="" cols="30" rows="10"></textarea></p>

        <label for="peliculas">Peliculas:</label>
        <p>
            <select>
                <option value="">Spiderman</option>
                <option value="">Iron Man</option>
                <option value="">Capitan America</option>
            </select>
        </p>

        <label for="">Boton:</label>
        <p><input type="submit" value="Enviar"></p>
    </form>
</body>

</html>