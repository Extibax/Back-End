<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_crud_mysql'
);

if (isset($conn)) {
    /* echo "Data Base is connected"; */
    if (isset($_ENV["DB_USERNAME"])) {
        echo $_ENV["DB_USERNAME"];
    }
}
