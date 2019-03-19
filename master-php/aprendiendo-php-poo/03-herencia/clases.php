<?php

// HERENCIA: La posibilidad de compartir atributos y metodos
// entre clases

class Persona
{
    
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of apellidos
     */ 
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Get the value of altura
     */ 
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Get the value of edad
     */ 
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */ 
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */ 
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function hablar()
    {
        return "Estoy hablando";
    }

    public function caminar()
    {
        return "Estoy caminando";
    }
}

class Informatico extends Persona
{
    public $lenguajes;
    public $experienciaProgramador;

    public function __construct()
    {
        $this->lenguajes = "HTML, CSS, PHP, JS";
        $this->experienciaProgramador = 10;
    }

    public function sabeLenguajes($lenguajes)
    {
        $this->lenguajes = $lenguajes;

        return $this->lenguajes;
    }

    public function programar()
    {
        return "Soy programador";
    }

    public function repararOrdernador()
    {
        return "Reparar ordenadores";
    }

    public function hacerOfimatica()
    {
        return "Estoy escribiendo en Word";
    }
}

class TecnicoRedes extends Informatico
{
    public $auditarRedes;
    public $experienciaRedes;

    public function __construct()
    {
        parent::__construct();

        $this->auditarRedes = "Experto";
        $this->experienciaRedes = 5;
    }

    public function auditoria()
    {
        return "Estoy auditando una red";
    }
}