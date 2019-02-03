<?php 
/* Conectar a la base de datos */

$connection = mysqli_connect("localhost", "root", "", "phpmysql");

/* Comprobar si la connection es correcta */

if (mysqli_connect_errno()) 
{
    echo 'La connection a la base de datos MySQL ha fallado: '
    .mysqli_connect_error();
}
else
{
    echo 'Connection realizada correctamente <br>';
}

/* Consulta para configurar la codificacion de caracteres */

mysqli_query($connection, "SET NAMES 'utf8'");

/* Consulta SELECT desde PHP */

$query = mysqli_query($connection, "SELECT * FROM notes");

while ($note = mysqli_fetch_assoc($query)) 
{
    /* var_dump($note); */
    echo "<h3>".$note['Title']."</h3>";
    echo "<p>".$note['Description']."</p>";
}

/* Insertar en la base de datos desde PHP */

$sql = "INSERT INTO notes 
VALUES(NULL, 'Note From PHP', 'Esto es una nota desde PHP', 'Blue')";
$insert = mysqli_query($connection, $sql);

if ($insert) 
{
    echo "La insercion se ha realizado correctamente";
}
else
{
    echo "Error: ".mysqli_error($connection);
}