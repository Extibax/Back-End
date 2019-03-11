<?php

require_once 'includes/connection.php';

if ($_POST['submit']) {
    
    /* Get data from the Form */
    $register_first_name = isset($_POST['register_first_name']) ? mysqli_real_escape_string($connection, $_POST['register_first_name']) : false;
    $register_last_name = isset($_POST['register_last_name']) ? mysqli_real_escape_string($connection, $_POST['register_last_name']) : false;
    $register_email = isset($_POST['register_email']) ? mysqli_real_escape_string($connection, $_POST['register_email']) : false;
    $register_password = isset($_POST['register_password']) ? mysqli_real_escape_string($connection, $_POST['register_password']) : false;

    /* Validate the data */
    $errors = array();
    
    if(empty($register_first_name) || is_numeric($register_first_name) || preg_match("/[0-9]/", $register_first_name)) {
        $errors['first_name'] = "The First Name is invalid";
    }

    if (empty($register_last_name) || is_numeric($register_last_name) || preg_match("/[0-9]/", $register_last_name)) {
        $errors['last_name'] = "The Last Name is invalid";
    }

    if (empty($register_email) || !filter_var($register_email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "The Email is invalid";
    }

    if (empty($register_password)) {
        $errors['password'] = "The Password is empty";
    }

    if (count($errors) == 0) {
        
        header('Location: index.php');

    } else {
        $_SESSION['errors'] = $errors;
        header('Location: index.php');
    }

}

?>