<?php
header('Content-Type: application/json');

require_once 'connection.php';

$query = "SELECT * FROM tasks";
$result = mysqli_query($connection, $query);

if (!$result) {
    die('Query Failed' . mysqli_error($connection));
}

$json = array();

while ($row = mysqli_fetch_array($result)) {
    /* $json = array($row['ID'], $row['Title'], $row['Description']); */

    $json[] = $row;

    /* var_dump($json); */
}

$jsonstring = json_encode($json);
echo $jsonstring;

?>