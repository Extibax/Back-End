<?php 

require_once 'connection.php';

if (isset($_POST['search']))
{
    $search = $_POST['search'];

    if (!empty($search)) 
    {
        $query = 
        "SELECT * FROM tasks WHERE Title LIKE '$search%'";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die('Query Error: ' . mysqli_error($connection));
        }

        $json = array();

        while ($row = mysqli_fetch_array($result)) {

            $json[] = array(
                'ID'=>$row['ID'],
                'Title'=>$row['Title'],
                'Description'=>$row['Description']
            );
        }

        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
}