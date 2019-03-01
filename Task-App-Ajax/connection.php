<?php 

session_start();

$connection = mysqli_connet(
    'localhost',
    'root',
    'admin',
    'php_tests'
);

if ($connection) {
    echo "Connection is OK";
}