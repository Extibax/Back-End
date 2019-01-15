<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Imprimir por pantalla - Master en PHP</title>
    </head>
    <body>
        <h1>Master en <?php echo 'PHP</h1>'; ?>

        <?php //Echo Shortcut ?>
        <?='Welcome!'?>

        <?php
            //Titular de la seccion
            echo '<h3>Listado de Video Juegos:</h3>';
            echo '<ul>'
                    .'<li>Gta V</li>'
                    .'<li>Fifa</li>'
                    .'<li>Mario Kart</li>'
                .'</ul>';
            echo '<p>Esta es toda'.' - '.'la lista de juegos</p>';
        ?>
    </body>
</html>