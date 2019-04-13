<?php

abstract class Ordernador
{
    public $encendido;

    abstract public function encender();

    public function apagar()
    {
        $this->encendido = false;
    }
}

class PcAsus extends Ordernador
{
    public $software;

    public function arrancarSorftware()
    {
        $this->software = true;
    }

    public function encender()
    { 
        $this->encendido = true;
    }
}

$ordenador = new PcAsus();
$ordenador->arrancarSorftware();
$ordenador->encender();
$ordenador->apagar();
var_dump($ordenador);