<?php

require_once 'connection.php';

if (isset($_POST['ID'])) {
    $ID = $_POST['ID'];
    $query = "DELETE FROM tasks WHERE ID = $ID";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error($connection));
    }
    echo "Task Deleted!";
}

?>