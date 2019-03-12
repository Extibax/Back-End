<?php

require_once 'includes/connection.php';

if (isset($_POST['login_submit']) && isset($_POST['login_email']) && isset($_POST['login_password'])) {
    $login_email = isset($_POST['login_email']) ? mysqli_real_escape_string($connection, trim($_POST['login_email'])) : false;
    $login_password = isset($_POST['login_password']) ? mysqli_real_escape_string($connection, $_POST['login_password']) : false;

    $query = "SELECT * FROM users WHERE Email = '$login_email'";

    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $login_user = mysqli_fetch_assoc($result);

        if (password_verify($login_password, $login_user['Password'])) {
            $_SESSION['user'] = $login_user;

            if (isset($_SESSION['login_error'])) { 
                unset($_SESSION['login_error']);
            }
        } else {
            $_SESSION['login_error']['general'] = "¡Incorrect Login!";
        }
    } else {
        $_SESSION['login_error']['general'] = "¡Incorrect Login!";
    }

} else {
    $_SESSION['login_error']['general'] = "¡Insert the email and password to login!";
}

header('Location: index.php');