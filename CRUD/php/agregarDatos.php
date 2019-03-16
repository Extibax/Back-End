<?php

	require_once "conexion.php";
	$conexion=conexion();

	$n=$_POST['nombre'];
	$n2=$_POST['identificacion'];

	$sql = "INSERT INTO crudpersons (nombre,identificacion) values
	('$n','$n2')";

	echo $result=mysqli_query($conexion,$sql);
?>