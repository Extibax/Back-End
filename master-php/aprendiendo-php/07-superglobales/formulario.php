<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <!-- Se puede usar POST en ves de GET que es mas seguro. -->
        <form method="GET" action="recibir.php">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">
            </p>

            <p>
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido">
            </p>

            <p>
                <input type="submit" value="Enviar datos">
            </p>
        </form>
    </body>
</html>