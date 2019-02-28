<?php 

if (true) 
{
    require_once '../connection.php';

    if (isset($_POST['habit_name']))
    {
        $habit_name = $_POST['habit_name'];
    }
    
    if (isset($_POST['habit_link']))
    {
        $habit_link = $_POST['habit_link'];
    }
    
    $query = 
    "INSERT INTO habits (Habit_name, Habit_link) VALUES ('$habit_name', '$habit_link')";

    $result = mysqli_query($connection, $query);

    if ($result) {
        echo 1;
    }
    else
    {
        echo 2;
    }

    var_dump($result);
    die();
}

/* header('Location: ../index.php'); */