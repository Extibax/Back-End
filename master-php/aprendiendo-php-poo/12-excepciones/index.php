<?php


/* Capturar excepciones, en codigo susceptible a errores */
try {
    if (isset($_GET['ID'])) {
        echo "<h1>El parametro es: {$_GET['ID']} </h1>";
    } else {
        throw new Exception("Faltan parametros por la URL");
    }
} catch (Exception $e) {
    echo "<br>Ha habido un error: " . $e->getMessage() . "<br>";
} finally { 
    echo "<br>Todo correto<br>";
}
