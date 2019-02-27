<?php

class MyClass
{
    public $public = 'Public';

    function printHello()
    {
        echo $this->public;
    }
}

$obj = new MyClass();

echo $obj->public;