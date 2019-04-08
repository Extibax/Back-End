<?php

$dbh = new PDO("mysql:host=localhost;dbname=u_images", "root", "");
$stmt = $dbh->prepare("SELECT * FROM image");
$stmt->execute();
$row = $stmt->fetch();
$type = json_decode($row['name_type'], true)['Type'];

header('Content-Type:' . $type);
echo $row['image'];

?>
