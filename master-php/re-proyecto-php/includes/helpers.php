<?php 

require_once 'connection.php';

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
    if (isset($_SESSION['register_error'])) {
        unset($_SESSION['register_error']);
    } else if (isset($_SESSION['register_success'])) {
        unset($_SESSION['register_success']);
    }

    if (isset($_SESSION['login_error'])) {
        unset($_SESSION['login_error']);
    }
}

function getCategories($connection) {
    $query = "SELECT * FROM categories";
    $result = mysqli_query($connection, $query);

    $categories = array();
    if ($result && mysqli_num_rows($result) >= 1) {
        $categories = $result;
    } 

    return $categories;
}

function getEntries($connection) {
    $query = 
    "SELECT e.*, c.* 
    FROM entries e
    INNER JOIN categories c 
    ON e.category_id = c.ID
    ORDER BY e.ID DESC LIMIT 4";
    $result = mysqli_query($connection, $query);

    $entries = array();
    if ($result && mysqli_num_rows($result) >= 1) {
        $entries = $result;
    } 

    return $entries;
}