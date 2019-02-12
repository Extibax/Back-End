<?php

if (isset($_POST)) {
    /* Connection to the DB */
    require_once 'includes/connection.php';

    var_dump($_SESSION['user']);

    /* Collect Data */
    $user_id = $_SESSION['user']['id'];

    $first_name = isset($_POST['first-name'])
    ? mysqli_real_escape_string($connection, $_POST['first-name'])
    : false;

    $last_name = isset($_POST['last-name'])
    ? mysqli_real_escape_string($connection, $_POST['last-name'])
    : false;

    $email = isset($_POST['email'])
    ? mysqli_real_escape_string($connection, trim($_POST['email']))
    : false;

    /* Array of errors */
    $errors = array();

    /* Validation of data before save it in the DB */

    /* Validation of First Name */
    if (empty($first_name)) {

        $first_name = $_SESSION['user']['First_name'];

    } else if (!is_numeric($first_name) && !preg_match("/[0-9]/", $first_name)) {

        $valid_first_name = true;

    } else {

        $valid_first_name = false;
        $errors['first_name'] = "First Name is invalid";

    }

    /* Validation of Last Name */
    if (empty($last_name)) {

        $last_name = $_SESSION['user']['Last_name'];

    } else if (!is_numeric($last_name) && !preg_match("/[0-9]/", $last_name)) {

        $valid_last_name = true;

    } else {

        $valid_last_name = false;
        $errors['last_name'] = "Last Name is invalid";

    }

    /* Validation of Email */
    if (empty($email)) {

        $email = $_SESSION['user']['Email'];

    } else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $valid_email = true;

    } else {

        $valid_email = false;
        $errors['email'] = "Email is invalid";

    }

    if (count($errors) == 0) {

        $sql = "SELECT id, Email FROM users WHERE Email = '$email';";
        if ($sql) {
            $email_db = mysqli_query($connection, $sql);
            $email_db_assoc = mysqli_fetch_assoc($email_db);
        } else {
            echo "We cant select";
        }
        

        if ($email_db_assoc['id'] == $user_id || empty($email_db_assoc)) {

            $sql =
                "UPDATE users SET
                First_name = '$first_name',
                Last_name = '$last_name',
                Email = '$email'
                WHERE id = '$user_id';";

            $update = mysqli_query($connection, $sql);

            if ($update) {

                $_SESSION['user']['First_name'] = $first_name;
                $_SESSION['user']['Last_name'] = $last_name;
                $_SESSION['user']['Email'] = $email;
                $_SESSION['completed'] = "Your data has been update sucessfully";
                var_dump($_SESSION['user']);
                echo '<br>The SQL is ok<br>';

            } else {

                $_SESSION['errors']['general'] = "Error trying to update the user";
                echo '<br>Something is wrong in the Query<br>';

            }

            echo "<br>We dont have any error<br>";

        } else {
            $_SESSION['errors']['general'] = "The user already exist!";
        }

    } else {

        $_SESSION['errors'] = $errors;
        var_dump($errors);

    }

}

header("Location: my-data.php");