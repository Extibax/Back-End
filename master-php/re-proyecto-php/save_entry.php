<?php

if (isset($_POST['save_entry']) && isset($_POST['entry_title']) && isset($_POST['entry_description']) && isset($_POST['entry_category'])) {
    
    require_once 'includes/connection.php';

    $user_id = $_SESSION['user']['ID'];
    $entry_title = mysqli_real_escape_string($connection, $_POST['entry_title']);
    $entry_description = mysqli_real_escape_string($connection, $_POST['entry_description']);
    $entry_category = mysqli_real_escape_string($connection, $_POST['entry_category']);

    $entry_errors = array();

    if (empty($entry_title) || is_numeric($entry_title)) {
        $entry_errors['entry_title'] = "The entry name is invalid";
    }
    if (empty($entry_description) || is_numeric($entry_description)) {
        $entry_errors['entry_description'] = "The entry description is invalid";
    }
    if (empty($entry_category) || !is_numeric($entry_category)) {
        $entry_errors['entry_category'] = "The entry category is invalid";
    }

    if (count($entry_errors) == 0) {

        if (isset($_GET['edit'])) {
            $entry_id = $_GET['edit'];

            $query = 
            "UPDATE entries 
            SET Title = '$entry_title', Description = '$entry_description', Category_id = $entry_category
            WHERE ID = $entry_id AND User_id = $user_id";
        } else {
            $query = "INSERT INTO entries VALUES (null, $user_id, $entry_category, '$entry_title', '$entry_description', CURDATE())";
        }

        $result = mysqli_query($connection, $query);
        header("Location: index.php");
    } else {
        if (isset($_GET['edit'])) {
            $_SESSION['edit_entry_error'] = $entry_errors;
            header("Location: edit_entry.php?ID=".$_GET['edit']);
        } else {
            $_SESSION['create_entry_error'] = $entry_errors;
            header("Location: create_entry.php");
        }
    }

} else {
    header("Location: index.php");
}