<?php

if (isset($_POST['mydata_submit']) && isset($_POST['mydata_first_name']) && isset($_POST['mydata_last_name']) && isset($_POST['mydata_email'])) {
    require_once 'includes/helpers.php';

    $user_id = $_SESSION['user']['ID'];
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

    if (issetEmail($connection, $user_id, $mydata_email)) {
        if (empty($mydata_email) || is_numeric($mydata_first_name)) {
            $mydata_errors['mydata_email'] = "The new email is invalid";
        }
    } else {
        $mydata_errors['mydata_email'] = "The email you want to change is already in use";
    }
    
    if (count($mydata_errors) == 0) {
        $query = "UPDATE users SET First_name = '$mydata_first_name', Last_name = '$mydata_last_name', Email = '$mydata_email' WHERE ID = $user_id";
        $result = mysqli_query($connection, $query);
        if ($result) {
            $_SESSION['user']['First_name'] = $mydata_first_name;
            $_SESSION['user']['Last_name'] = $mydata_last_name;
            $_SESSION['user']['Email'] = $mydata_email;
            $_SESSION['success'] = "Your data was updated successfully";
        } else {
            $_SESSION['error']['general'] = "Your data was not updated successfully";
        }
    } else {
        $_SESSION['update_mydata_error'] = $mydata_errors;
    }
}

header("Location: mydata.php");