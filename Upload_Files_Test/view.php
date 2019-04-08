<?php

$dbh = new PDO("mysql:host=localhost;dbname=upload_images", "root", "");
$ID = isset($_GET['id']) ? $_GET['id'] : false;
$stat = $dbh->prepare("SELECT * FROM images WHERE ID = ?");
$stat->bindParam(1, $ID);
$stat->execute();
$row = $stat->fetch();
//header('Content-Type:' .$row['type']);
var_dump($row['data']);
//echo $row['data'];
