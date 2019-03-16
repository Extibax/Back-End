<?php 

require_once "connection.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user = $_POST['user'];
$password = sha1($_POST['password']);

if (repeatedSearch($user, $password, $connection) == 1)
{
	echo 2;
}
else
{
	$query=
	"INSERT INTO users (First_name, Last_name, User, Password) 
	VALUES ('$first_name', '$last_name', '$user', '$password')";
	$result = mysqli_query($connection, $query);

	echo 1;
}

function repeatedSearch($user, $password, $connection)
{
	$query = 
	"SELECT * FROM users WHERE User = '$user' AND Password = '$password'";
	$result = mysqli_query($connection, $query);

	if(mysqli_num_rows($result) > 0)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}