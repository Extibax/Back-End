<?php 

function showErrors($errors)
{
    $alert = "";
    if (isset($errors)) {
        $alert = 
        "<div class='alert alert-error'>
            $errors
        </div>";
    }

    return $alert;
}

function clearErrors() {
    unset($_SESSION['errors']);
}