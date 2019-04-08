<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload images to MySQL</title>
</head>

<body>
    <?php
    $dbh = new PDO("mysql:host=localhost;dbname=upload_images", "root", "");
    if (isset($_POST['submit'])) {
        $name = $_FILES['myfile']['name'];
        $type = $_FILES['myfile']['type'];
        $data = file_get_contents($_FILES['myfile']['tmp_name']);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        if (!empty($name & $type & $data)) {
            $stmt = $dbh->prepare("INSERT INTO images VALUES (null, ?, ?, ?)");
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $type);
            $stmt->bindParam(3, $data);
            $stmt->execute();
        }
    }
    ?>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" name="submit" value="Upload">
    </form>
    <p></p>
    <ol>
        <?php
        $stat = $dbh->prepare("SELECT * FROM images");
        $stat->execute();
        while ($row = $stat->fetch()) {
            echo "<li><a href='view.php?id=" . $row['ID'] . "' target='_blank'>" . $row['name'] . "</a></li>";
        }
        ?>
    </ol>
</body>

</html>