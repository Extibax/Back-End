<?php 

function showSessionMessages($errors, $alert_type)
{
    $alert = "";
    if (isset($errors)) {
        $alert = 
        "<div class='alert alert-$alert_type'>
            $errors
        </div>";
    }

    return $alert;
}

function clearSessionMessages() {
    if (isset($_SESSION['errors'])) {
        unset($_SESSION['errors']);
    }

    if (isset($_SESSION['completed'])) {
        unset($_SESSION['completed']);
    }
}