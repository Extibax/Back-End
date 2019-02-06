<?php
session_start();

/* Validation of data */
if (isset($_POST)) 
{

    /* Collect the registry values */
    $first_n = isset($_POST['first-name']) ? $_POST['first-name'] : false;
    $second_n = isset($_POST['second-name']) ? $_POST['second-name'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['email'] : false;

    /* Array of errors */

    $errors = array();

    /* Validation of data before saving it in the DB */

    /* Validation of First Name */
    if (!empty($first_n) && !is_numeric($first_n) && !preg_match("/[0-9]/", $first_n)) 
    {
        $valid_first_name = true;
    }
    else
    {
        $valid_first_name = false;
        $errors['first-name'] = "The First Name is invalid";
    }
    
    /* Validation of Second Name */
    if (!empty($second_n) && !is_numeric($second_n) && !preg_match("/[0-9]/", $second_n)) 
    {
        $valid_second_name = true;
    }
    else
    {
        $valid_second_name = false;
        $errors['second-name'] = "The Second Name is invalid";
    }

    /* Validation of Email */
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        $valid_email = true;
    }
    else
    {
        $valid_email = false;
        $errors['email'] = "The Email is invalid";
    }

    /* Validation of Password */
    if (!empty($second_n)) 
    {
        $valid_password = true;
    }
    else
    {
        $valid_password = false;
        $errors['password'] = "The Password is empty";
    }

    $save_user = false;
    if (count(errors) == 0) {
        $save_user = true;

        /* Insert user in the table users in the DB */
    }
    else
    {
        $_SESSION['errors'] = $errors;
        header('Location: index.php');
    }
}

