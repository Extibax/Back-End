<?php 

require_once 'connection.php';

if (isset($_POST['Title'])) {

    $ID = $_POST['ID'];
    $Title = $_POST['Title'];
    $Description = $_POST['Description'];

    $query = "UPDATE tasks SET Title = '$Title', Description = '$Description' WHERE ID = '$ID'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error($connection));
    }

    echo "Task Edited";
}

?>