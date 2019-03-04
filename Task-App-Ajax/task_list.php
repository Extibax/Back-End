<?php

require_once 'connection.php';

$query = "SELECT * FROM tasks";
$result = mysqli_query($connection, $query);

if (!$result) {
    die('Query Failed' . mysqli_error($connection));
}

$json = array();

while ($row = mysqli_fetch_array($result)) 
{
    $json[] = array(
        "ID" => $row['ID'],
        "Title" => $row['Title'],
        "Description" => $row['Description']
    );

    /* $jsonstring = json_encode($json); */
    /* echo $jsonstring; */
    echo $json;
}

?>

Alicia'; SELECT * FROM datos WHERE nombre LIKE '%