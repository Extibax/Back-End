<?php

class Usuario
{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Juan Bedoya";
        $this->email = "extibax@gmail.com";
        echo "<br>Creando el objeto<br>";
    }

    public function __toString()
    {
        return "<br>Hola: ($this->nombre), estas registrado con ($this->email)<br>";
    }

    public function __destruct()
    {
        echo "<br>Destruyendo el objeto<br>";
    }
}

$usuario = new Usuario();
echo $usuario;