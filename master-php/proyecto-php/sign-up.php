<?php
/* Validation of data */
if (isset($_POST)) 
{

    /* Connection to the DB */
    require_once 'includes/connection.php';

    /* Start SESSION */
    if (!isset($_SESSION)) 
    {
        session_start();
    }

    /* Collect the registry values */
    $first_n = isset($_POST['first-name']) ? mysqli_real_escape_string($connection, $_POST['first-name']) : false;
    $second_n = isset($_POST['second-name']) ? mysqli_real_escape_string($connection, $_POST['second-name']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($connection, trim($_POST['email'])) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($connection, $_POST['password']) : false;

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
    if (!empty($password)) 
    {
        $valid_password = true;
    } 
    else 
    {
        $valid_password = false;
        $errors['password'] = "The Password is empty";
    }

    $save_user = false;
    if (count($errors) == 0) 
    {
        $save_user = true;

        /* Encrypt Password */
        $encrypt_pass = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        /* Insert user in the table users in the DB */
        $sql = "INSERT INTO users
                VALUES(NULL, '$first_n', '$second_n', '$email', '$encrypt_pass', CURDATE());";
        $save = mysqli_query($connection, $sql);

        if ($save) 
        {
            $_SESSION['completed'] = "Registration has been successfully completed";
        } 
        else 
        {
            $_SESSION['errors']['general'] = "Error trying to save the user";
        }
    } 
    else 
    {
        $_SESSION['errors'] = $errors;
    }
}

header('Location: index.php');