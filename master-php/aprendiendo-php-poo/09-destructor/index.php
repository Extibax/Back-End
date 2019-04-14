<?php

class Usuario
{
    public $nombre;
    public $email;

    public function __construct()
    {
        echo "<br>Creando el objeto<br>";
    }

    public function __destruct()
    {
        echo "<br>Destruyendo el objeto<br>";
    }
}

$usuario = new Usuario();

for ($i = 0; $i <= 25; $i++)
{
    echo "<br>" . $i;
}