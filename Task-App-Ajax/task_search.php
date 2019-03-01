<?php 

require_once 'connection.php';

$search = $_POST['search'];

if (!empty($search)) {
    $query = 
    "SELECT * FROM tasks WHERE Task_name LIKE '%$search%'";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query Error: ' . mysqli_error($connection));
    }

    $json = array();

    while ($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'ID' => $row['ID'],
            'Task_name' => $row['Task_name'],
            'Task_description' => $row['Task_description']
        );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;

}

?>