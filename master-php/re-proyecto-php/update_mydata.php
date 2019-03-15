<?php

if (isset($_POST['mydata_submit']) && isset($_POST['mydata_first_name']) && isset($_POST['mydata_last_name']) && isset($_POST['mydata_email'])) {
    require_once 'includes/connection.php';

    $mydata_first_name = mysqli_escape_string($connection, $_POST['mydata_first_name']);
    $mydata_last_name = mysqli_escape_string($connection, $_POST['mydata_last_name']);
    $mydata_email = mysqli_escape_string($connection, $_POST['mydata_email']);


    $mydata_errors = array();

    if (empty($mydata_first_name) || is_numeric($mydata_first_name) || preg_match("/[0-9]/", $mydata_first_name)) {
        $mydata_errors['mydata_first_name'] = "The new first name is invalid";
    }

    if (empty($mydata_last_name) || is_numeric($mydata_last_name) || preg_match("/[0-9]/", $mydata_last_name)) {
        $mydata_errors['mydata_last_name'] = "The new last name is invalid";
    }

    if (empty($mydata_email) || is_numeric($mydata_first_name)) {
        $mydata_errors['mydata_email'] = "The new email is invalid";
    }

    if (count($mydata_errors) == 0) {
        $query = "UPDATE users SET (First_name, Last_name, Email) VALUES ('$mydata_first_name', '$mydata_last_name', '$mydata_email')";
        $result = mysqli_query($connection, $query);

        if ($result) {
            $_SESSION['success'] = "Your data was updated successfully";
        } else {
            $_SESSION['error']['general'] = "Your data was not updated successfully";
        }
    } else {
        $_SESSION['error']['update_mydata'] = $mydata_errors;
    }
}

header("Location: my_data.php");