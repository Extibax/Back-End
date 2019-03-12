<?php

require_once 'includes/connection.php';

if (isset($_POST['register_submit']) && isset($_POST['register_first_name']) && isset($_POST['register_last_name']) && isset($_POST['register_email']) && isset($_POST['register_password'])) {
    
    /* Get data from the Form */
    $register_first_name = isset($_POST['register_first_name']) ? mysqli_real_escape_string($connection, $_POST['register_first_name']) : false;
    $register_last_name = isset($_POST['register_last_name']) ? mysqli_real_escape_string($connection, $_POST['register_last_name']) : false;
    $register_email = isset($_POST['register_email']) ? mysqli_real_escape_string($connection, trim($_POST['register_email'])) : false;
    $register_password = isset($_POST['register_password']) ? mysqli_real_escape_string($connection, $_POST['register_password']) : false;

    /* Validate the data */
    $register_errors = array();
    
    if(empty($register_first_name) || is_numeric($register_first_name) || preg_match("/[0-9]/", $register_first_name)) {
        $register_errors['first_name'] = "The First Name is invalid";
    }

    if (empty($register_last_name) || is_numeric($register_last_name) || preg_match("/[0-9]/", $register_last_name)) {
        $register_errors['last_name'] = "The Last Name is invalid";
    }

    if (empty($register_email) || !filter_var($register_email, FILTER_VALIDATE_EMAIL)) {
        $register_errors['email'] = "The Email is invalid";
    }

    if (empty($register_password)) {
        $register_errors['password'] = "The Password is empty";
    }

    if (count($register_errors) == 0) {

        $secure_password = password_hash($register_password, PASSWORD_BCRYPT, ['cost'=>4]);

        $query = 
        "INSERT INTO users VALUES
         (null, '$register_first_name', '$register_last_name', '$register_email', '$secure_password', CURDATE())";

        $result = mysqli_query($connection, $query);

        if ($result) {
            $_SESSION['register_success'] = "Registration has been completed successfully";
        } else {
            $_SESSION['register_errors']['general'] = "Fail to save the user";
        }

    } else {
        $_SESSION['register_errors'] = $errors;
    }

}

header('Location: index.php');

?>