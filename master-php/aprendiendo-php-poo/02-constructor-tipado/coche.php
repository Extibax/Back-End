<?php
// Programacion Orientada a Objetos en PHP (POO)

// Definir una clase molde para crear mas objetos de tipo coche con caracteristicas parecidas
class Coche
{

    // Atributos o propiedades

    //PUBLIC: Podemos acceder desde cualquier lugar, dentro de la clase actual, 
    // dentro de clases que heredan esta clase o fuera de la clase
    public $color;
    
    //PROTECTED: Podemos acceder desde la clase que los define y desde clases
    // que hereden esta clase
    protected $marca;

    //PRIVATE: Unicamente se puede acceder desde esta clase
    private $modelo;

    public $velocidad;
    public $caballaje;
    public $plazas;

    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas)
    {
      $this->color = $color;
      $this->marca = $marca;
      $this->modelo = $modelo;
      $this->velocidad = $velocidad;
      $this->caballaje = $caballaje;
      $this->plazas = $plazas;
    }

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

    public function setMarca($marca)
    {
      $this->marca = $marca;
    }

    public function getModelo()
    {
      return $this->modelo;
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

    public function mostrarInformacion(Coche $miObjeto)
    {
      if (is_object($miObjeto)) {
        $informacion = "<h1>Informacion del coche</h1>";
        $informacion .= "<hr>";
        $informacion .= "Color: $miObjeto->color";
        $informacion .= "<hr>";
        $informacion .= "Modelo: ".$miObjeto->getModelo();
        $informacion .= "<hr>";
        $informacion .= "Velocidad: $miObjeto->velocidad";
      } else {
        $informacion = "Tu dato es este: $miObjeto";
      }

      return $informacion;
    }

} // Fin definicion de la clase