<?php

//Bad practice:
/* 
require_once 'clases/usuario.php';
require_once 'clases/categoria.php';
require_once 'clases/entrada.php';
 */

//Good practice:
/* require_once 'autoload.php'; */


/* $usuario = new Usuario();
echo $usuario->nombre;
echo '<br>';
echo $usuario->email;

$categoria = new Categoria();
echo '<br>';
echo $categoria->nombre; */

//Autoload & Namespaces together

require_once 'autoload.php';

//PHP7: use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;

//Namespaces MisClases
use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;

//Namespaces PanelAdministrador
use PanelAdministrador\Usuario AS UsuarioAdmin;

class Principal
{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }

    function informacion()
    {
        echo __LINE__;
        echo __METHOD__;
    }
}

//Usuario del namespace MisClases
$Principal = new Principal();
$Principal->informacion();
var_dump($Principal->usuario);
var_dump(get_class_methods($Principal));

//Usuario del namespace PanelAdministrador
$Usuario = new UsuarioAdmin();
$Usuario->informacion();
var_dump($Usuario);

//Compobar si existe una clase:

$clase = @class_exists('MisClases\Usuario');

if ($clase) {
    echo '<h1>La clase si existe</h1>';
} else {
    echo '<h1>La clase no existe</h1>';
}