<h1>Hello World PHP POO</h1>
<?php
// Programacion Orientada a Objetos en PHP (POO)

// Definir una clase molde para crear mas objetos de tipo coche con caracteristicas parecidas
class Coche
{

    // Atributos o propiedades
    public $color = "Red";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballos = 500;
    public $plazas = 2;

    // Metodos, son acciones que hace el objeto (Antes funciones)
    public function getColor()
    {
      // Busca en esta clase la propiedad X
      return $this->color;
    }

    public function setColor($color)
    {
      $this->color = $color;
    }

    public function acelerar()
    {
      $this->$velocidad++;
    }

    public function frenar()
    {
      $this->$velocidad--;
    }

    public function getVelocidad()
    {
      return $this->velocidad;
    }

} // Fin definicion de la clase

// Crear un objeto / Instanciar la get_declared_classes
$coche = new Coche();

$coche->setColor("Amarillo");
echo "El color del coche es: ".$coche->getColor()."<br>";

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo $coche->getVelocidad();

$coche2 = new Coche();
$coche->setColor("Verde");

var_dump($coche);
var_dump($coche2);

?>