<?php

	require_once "conexion.php";
	$conexion=conexion();

	$idPost=$_POST['id'];
	$namePost=$_POST['nombre'];
	$identificationPost=$_POST['identificacion'];

	$sql = "UPDATE crudpersons SET nombre='$namePost', identificacion='$identificationPost' WHERE id = '$idPost'";
	echo $result=mysqli_query($conexion,$sql);

?>