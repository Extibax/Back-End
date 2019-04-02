<?php

class Usuario{

    const URL_COMPLETA = "http://localhost";
    public $email;
    public $password;

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}

echo Usuario::URL_COMPLETA;

$usuario = new Usuario();
echo $usuario::URL_COMPLETA;
var_dump($usuario);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hello Guys</title>
    </head>
</html>