<?php

if (isset($_POST['save_category']) && isset($_POST['category_name'])) {
    
    require_once 'includes/connection.php';

    $category_name = mysqli_real_escape_string($connection, $_POST['category_name']);

    if (empty($category_name) || is_numeric($category_name) || preg_match("/[0-9]/", $category_name)) {
        $category_name = false;
    }

    if ($category_name) {
        $query = "INSERT INTO categories VALUES (null, '$category_name')";
        $result = mysqli_query($connection, $query);
        header("Location: index.php");
    } else {
        $_SESSION['error']['create_category'] = "The name of category can not be empty or with numbers";
        header("Location: create_category.php");
    }

} else {
    header("Location: index.php");
}