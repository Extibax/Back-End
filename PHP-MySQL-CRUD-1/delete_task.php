<?php 

require_once 'connection.php';

if (isset($_GET['ID']))
{
    $ID = $_GET['ID'];
    $query = "DELETE FROM tasks WHERE ID = '$ID'";
    $result = mysqli_query($connection, $query);

    if ($result)
    {
        $_SESSION['message'] = 'Task Was Deleted';
        $_SESSION['message_type'] = 'danger';
    }
}

header('Location: index.php');