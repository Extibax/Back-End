<?php

if (isset($_POST)) 
{
    /* Connection to the DB */
    require_once 'includes/connection.php';

    $name = isset($_POST['name']) 
    ? mysqli_real_escape_string($connection, $_POST['name']) 
    : false;

    /* Array of errors */
    $errors = array();

    /* Validation of data before save it in the DB*/

    /* Validation of Name Category */
    if (!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/", $name)) 
    {
        $valid_name = true;
    }
    else
    {
        $valid_name = false;
        $errors['name'] = "The name is invalid";
    }

    if (count($errors) == 0)
    {
        $sql = "INSERT INTO categories VALUES (NULL, '$name');";
        $save = mysqli_query($connection, $sql);
    }
}

header('Location: index.php');