<?php

require_once "connection.php";

$user = $_POST['user'];
$password = sha1($_POST['password']);

$query = 
"SELECT * FROM users WHERE User = '$user' AND Password = '$password'";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) 
{
    $_SESSION['user'] = $user;
    echo 1;
} 
else 
{
	echo 0;
}