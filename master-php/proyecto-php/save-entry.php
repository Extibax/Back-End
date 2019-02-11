<?php 

if (isset($_POST))
{
    /* Connection to the DB */
    require_once 'includes/connection.php';

    $user_id = $_SESSION['user']['id'];

    $title = isset($_POST['title']) 
    ? mysqli_real_escape_string($connection, $_POST['title']) 
    : false;

    $description = isset($_POST['description']) 
    ? mysqli_real_escape_string($connection, $_POST['description']) 
    : false;

    $category = isset($_POST['category']) 
    ? (int)$_POST['category'] 
    : false;

    /* Array of errors */
    $errors = array();

    /* Validation of data before save it in the DB */

    /* Validation of Title Entry */
    if (!empty($title) && !is_numeric($title) && !preg_match("/[0-9]/", $title))
    {
        $valid_title = true;
    }
    else
    {
        $valid_title = false;
        $errors['title'] = "The title is invalid";
    }

    if (empty($description))
    {
        $errors['description'] = "The description is invalid";
    }

    if (empty($category) && !is_numeric($category))
    {
        $errors['category'] = "The category is invalid";
    }

    if (count($errors) == 0)
    {
        $sql = "INSERT INTO entries VALUES (NULL, '$user_id', '$category', '$title', '$description', CURDATE());";
        $save = mysqli_query($connection, $sql);

        header("Location: index.php");
    }
    else
    {
        $_SESSION['entry_errors'] = $errors;
        header("Location: create-entry.php");
    }
}

