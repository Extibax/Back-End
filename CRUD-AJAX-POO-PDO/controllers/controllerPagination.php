<?php
// Si no se ha enviado una petición mediante AJAX se retornará a página inicio
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    require_once '../models/Personas.php';
    // Aquí tu código
} else {
    header('Location:../');
}
