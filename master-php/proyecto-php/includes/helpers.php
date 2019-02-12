<?php

function showErrors($errors, $field)
{
    $alert = '';
    if (isset($errors[$field]) && !empty($field)) 
    {
        $alert = "<div class='alert alert-error'>"
            . $errors[$field] ."</div>";
        echo $alert;
    }
}

function deleteErrors()
{
    if (isset($_SESSION['errors'])) 
    {

        $_SESSION['errors'] = null;
        $deleted = true;
    }

    if (isset($_SESSION['entry_errors'])) 
    {

        $_SESSION['entry_errors'] = null;
        $deleted = true;
    }

    if (isset($_SESSION['completed'])) 
    {
        $_SESSION['completed'] = null;
        $deleted = true;
    }
}

function getCategories($connection)
{
    $sql = "SELECT * FROM categories;";
    $categories = mysqli_query($connection, $sql);

    $result = array();
    if ($categories && mysqli_num_rows($categories) >= 1)
    {
        $result = $categories;
    }
    else
    {
        echo 'We dont have any category';
    }

    return $result;
}

function getEntries($connection) 
{
    $sql = 
    "SELECT e.*, c.Name AS 'Category' FROM entries e ".
    "INNER JOIN categories c ON c.id = e.category_id ".
    "ORDER BY e.id DESC LIMIT 4;";
    $entries = mysqli_query($connection, $sql);

    $result = array();
    if ($entries && mysqli_num_rows($entries) >= 1) 
    {
        $result = $entries;
    }
    else
    {
        echo 'We dont have any entry';
    }

    return $result;
}