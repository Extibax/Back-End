<?php

if (isset($_POST['submit'])) {
  $file = $_FILES['input-file'];
  $name_type = json_encode(array(
    "Name" => $file['name'],
    "Type" => $file['type']
  ));
  $image = file_get_contents($file['tmp_name']);

  var_dump($file);

  $dbh = new PDO("mysql:host=localhost;dbname=u_images", "root", "");
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $stmt = $dbh->prepare("INSERT INTO image VALUES (null, ?, ?)");
  $stmt->bindValue(1, $name_type);
  $stmt->bindValue(2, $image);
  echo $stmt->execute() ? "Success" : "Error: " . $dbh->errorInfo();

}
