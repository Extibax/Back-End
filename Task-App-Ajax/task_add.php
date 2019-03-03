<?php

require_once 'connection.php';

if (isset($_POST['Title'])) 
{
    $title = $_POST['Title'];
    $description = $_POST['Description'];
    $query = 
    "INSERT INTO tasks(Title, Description) VALUES ('$title', '$description')";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed');
    }
    echo 'Task saved';
}