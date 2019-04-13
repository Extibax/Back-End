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

    if (isset($_SESSION['update_mydata_error'])) {
        unset($_SESSION['update_mydata_error']);
    }

    if (isset($_SESSION['edit_entry_error'])) {
        unset($_SESSION['edit_entry_error']);
    }

    if (isset($_SESSION['error'])) {
        unset($_SESSION['error']);
    }

    if (isset($_SESSION['success'])) {
        unset($_SESSION['success']);
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

function getCategory($connection, $ID) {
    $query = "SELECT * FROM categories WHERE ID = $ID";
    $result = mysqli_query($connection, $query);

    $category = array();
    if ($result && mysqli_num_rows($result) >= 1) {
        $category = mysqli_fetch_assoc($result);
    } 

    return $category;
}

function getEntries($connection, $limit = false, $category = null, $search = null) {
    $query = 
    "SELECT e.*, c.Name AS 'Category_name', CONCAT(u.First_name, ' ', u.Last_name) AS 'User'
    FROM entries e
    INNER JOIN categories c ON e.category_id = c.ID
    INNER JOIN users u ON e.User_id = u.ID";

    if (!empty($category)) {
        $query .= " WHERE c.ID = $category";
    }

    if (!empty($search)) {
        $query .= " WHERE e.Title LIKE '%$search%'";
    }

    $query .= " ORDER BY e.ID DESC";

    if ($limit) {
        $query .= " LIMIT 4";
    }

    $result = mysqli_query($connection, $query);

    $entries = array();
    if ($result && mysqli_num_rows($result) >= 1) {
        $entries = $result;
    } 

    return $entries;
}

function getEntry($connection, $ID) {
    $query = 
    "SELECT e.*, c.Name AS 'Category_name', CONCAT(u.First_name, ' ', u.Last_name) AS User 
    FROM entries e 
    INNER JOIN categories c ON e.Category_id = c.ID
    INNER JOIN users u ON e.User_id = u.ID
    WHERE e.ID = $ID";

    $result = mysqli_query($connection, $query);

    $entry = array();
    if ($result && mysqli_num_rows($result) >= 1) {
        $entry = mysqli_fetch_assoc($result);
    }

    return $entry;
}

function issetEmail($connection, $user_ID, $user_Email) {
    $query = "SELECT ID, Email FROM users WHERE email = '$user_Email'";
    $result = mysqli_query($connection, $query);
    $user_compare = mysqli_fetch_assoc($result);

    if ($user_compare['ID'] == $user_ID || empty($user_compare)) {
        return true;
    } else {
        return false;
    }
}