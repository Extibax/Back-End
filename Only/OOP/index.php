<?php

class Car
{
    var $color;
    var $Motor;
    var $wheels;

    public function __construct()
    {
        $this->color = "Black";
        $this->Motor = 2000;
        $this->wheels = 4;
    }

    public function arrancar()
    {
        return "Im starting";
    }

    public function turn()
    {
        return "Im turning";
    }

    public function brake()
    {
        return "Im holding";
    }
}

$Kia = new Car();
echo $Kia->turn();

?>