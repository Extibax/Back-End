<?php 

require_once '../includes/connection.php';

$first_name =   "Cristian";
$last_name =    "Bedoya";
$email =        "cristian@gmail.com";
$password =     "sebas20";

$secure_password = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

$query = "INSERT INTO users VALUES (null, '$first_name', '$last_name', '$email', '$secure_password', CURDATE())";

$result = mysqli_query($connection, $query);

echo mysqli_error($connection);

if ($result) {
    echo "Insert is working!";
    var_dump($result);
} else {
    echo $query;
    echo "Insert is not working";
    var_dump($result);
}

?>