<?php

class Configuracion{
    public static $color;
    public  static $newsletter;
    public static $entorno;


    /**
     * Get the value of color
     */ 
    public static function getColor()
    {
        return self::$color;
    }

    /**
     * Get the value of newsletter
     */ 
    public static function getNewsletter()
    {
        return self::$newsletter;
    }

    /**
     * Get the value of entorno
     */ 
    public static function getEntorno()
    {
        return self::$entorno;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public static function setColor($color)
    {
        self::$color = $color;
    }
    
    /**
     * Set the value of newsletter
     *
     * @return  self
     */ 
    public static function setNewsletter($newsletter)
    {
        self::$newsletter = $newsletter;
    }

    /**
     * Set the value of entorno
     *
     * @return  self
     */ 
    public static function setEntorno($entorno)
    {
        self::$entorno = $entorno;
    }

}

