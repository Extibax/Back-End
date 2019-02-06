<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'extibax_blog';
$connection = mysqli_connect($server, $username, $password, $db);

mysqli_query($connection, "SET NAMES 'utf8'");

/* Start the SESSION */

session_start();