<?php

interface Ordernador
{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

class iMac implements Ordernador
{
    private $modelo;

    function getModelo()
    {
        return $this->modelo;
    }

    function setModelo($modelo)
    {
        $this->modelo  = $modelo;
    }

    public function encender()
    {
        
    }

    public function apagar()
    {

    }

    public function reiniciar()
    {

    }

    public function desfragmentar()
    {

    }

    public function detectarUSB()
    {

    }
}
