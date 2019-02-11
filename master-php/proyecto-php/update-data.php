<?php

if (isset($_POST))
{
    /* Connection to the DB */
    require_once 'includes/connection.php';

    $user_id = $_SESSION['user']['id'];

    $first_name = isset($_POST['first_name']) 
    ? mysql_real_escape_string($connection, $_POST['first_name']) 
    : false;

    $last_name = isset($_POST['last-name']) 
    ? mysqli_real_escape_string($connection, $_POST['last_name']) 
    : false;

    $email = isset($_POST['email']) 
    ? mysqli_real_escape_string($connection, $_POST['email']) 
    : false;

    /* Array of errors */
    $errors = array();

    /* Validation of data before save it in the DB */

    /* Validation of First Name */
    if (!empty($first_name) && !is_numeric($first_name) && !preg_match("/[0-9]/", $first_name))
    {
        $valid_first_name = true;
    }
    else
    {
        $valid_first_name = false;
        $errors['first_name'] = "First Name is invalid";
    }

    /* Validation of Last Name */
    if (!empty($last_name) && !is_numeric($last_name) && !preg_match("/[0-9]/", $last_name))
    {
        $valid_last_name = true;
    }
    else
    {
        $valid_last_name = false;
        $errors['last_name'] = "Last Name is invalid";
    }

    /* Validation of Email */
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $valid_email = true;
    }
    else
    {
        $valid_email = false;
        $errors['email'] = "Email is invalid";
    }

    if (count($errors) == 0)
    {
        $sql = 
        "UPDATE users SET 
        First_name = $first_name, Last_name = $last_name, Email = $email 
        WHERE id = $user_id";
    }
    else
    {
        $_SESSION['errors'] = $errors;
    }

}

header("Location: index.php");