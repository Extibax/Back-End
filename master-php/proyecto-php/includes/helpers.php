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
    $_SESSION['errors'] = null;
    unset($_SESSION['errors']);
}

?>