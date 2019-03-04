<?php
declare (strict_types = 1);
// Si no se ha enviado nada por el POST y se intenta acceder al archivo se retornará a la página de inicio
if ($_POST) {
    require_once '../models/Personas.php';
    // Aquí tu código
} else {
    // Retornar
    header('Location:../');
}
