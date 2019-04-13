<?php

trait Utilidades
{
    public function mostrarNombre()
    {
        echo "<h1>El nombre es: " . $this->nombre . "</h1>";
    }
}

class Coche
{
    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona
{
    public $nombre;
    public $apellidos;

    use Utilidades;
}

class VideoJuego
{
    public $nombre;
    public $año;

    use Utilidades;
}

$coche = new Coche();

$coche->nombre = "Mercedez";

$persona = new Persona();

$persona->nombre = "Juan";

$videojuego = new VideoJuego();

$videojuego->nombre = "Apex";

echo $coche->mostrarNombre();

echo $persona->mostrarNombre();

echo $videojuego->mostrarNombre();