<?php

require_once 'includes/connection.php';

if (isset($_SESSION['user']) && isset($_GET['ID'])) {
    $entry_id = $_GET['ID'];
    $user_id = $_SESSION['user']['ID'];
    
    $query = "DELETE FROM entries WHERE User_id = $user_id AND ID = $entry_id";
    $result = mysqli_query($connection, $query);
}

header("Location: index.php");