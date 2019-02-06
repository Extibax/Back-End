<?php

function showErrors($errors, $field)
{
    $alert = '';
    if (isset($errors[$field]) && !empty($field)) 
    {
        $alert = "<div class='alert alert-error'>".$errors[$field]."</div>";
        echo $alert;
    }
}

function deleteErrors()
{
    if (isset($_SESSION['errors'])) {

        $_SESSION['errors'] = null;
        unset($_SESSION['errors']);
    }

    if (isset($_SESSION['completed'])) 
    {
        $_SESSION['completed'] = null;
        unset($_SESSION['completed']);
    }
}

?>