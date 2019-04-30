<?php

function app_autoloader($class_name)
{
    require_once 'clases/' . $class_name . '.php';
}

spl_autoload_register('app_autoloader');