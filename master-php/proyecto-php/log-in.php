<?php 
/* Start SESSION & the connection to DB */
require_once 'includes/connection.php';

/* Collect form data */
if (isset($_POST)) 
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    /* Consulte to check the credentials of user */
    $sql = "SELECT * FROM users WHERE Email = '$email';";
    $log_in = mysqli_query($connection, $sql);
    
    if ($log_in && mysqli_num_rows($log_in) == 1) 
    {
        $user = mysqli_fetch_assoc($log_in);

        /* Check the password */
        if (password_verify($password, $user['Password'])) 
        {
            /* Use a SESSION to save the user's data that start session */
            $_SESSION['user'] = $user;
            if (isset($_SESSION['log_in_error'])) {
                unset($_SESSION['log_in_error']);
            }
        }
        else
        {
            /* If something is wrong, send a session with the error */
            $_SESSION['log_in_error'] = "Incorret log in";
            echo "Something is wrong";
        }
    }
    else
    {

    }
}

/* Redirect to index.php */
header('Location: index.php');