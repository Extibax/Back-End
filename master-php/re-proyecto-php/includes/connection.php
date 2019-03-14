<?php

$connection = mysqli_connect(
    'localhost',
    'root',
    '',
    'project_php_blog'
);

if (!isset($_SESSION)) {
    session_start();
}

?>