<?php 

require_once 'connection.php';

if (isset($_POST['ID'])) {

    $ID = $_POST['ID'];
    $query = "SELECT * FROM tasks WHERE ID = $ID";  
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error($connection));
    }

    $json = array();

    while ($row = mysqli_fetch_array($result)) 
    {
        $json[] = array(
            'ID' => $row['ID'],
            'Title' => $row['Title'],
            'Description' => $row['Description']
        );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;
}
else
{
    echo 'We are not receiving anything';
}

?>