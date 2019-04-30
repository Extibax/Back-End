<?php

namespace PanelAdministrador;

class Usuario
{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Sebastian Piedrahita";
        $this->email = "edgarjusebe@gmail.com";
    }
}