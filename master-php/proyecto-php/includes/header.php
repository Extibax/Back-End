<?php require_once 'connection.php' ?>
<?php require_once 'helpers.php'?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta UTF-8 -->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!-- Link Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Link CSS -->
    <link rel='stylesheet' href='assets/css/style.css'>

    <title>VideoGames Blog</title>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <!-- Logo -->
        <div class="logo">
            <a href="index.php">
                VideoGames Blog
            </a>
        </div>
        <!-- Menu -->
        <nav class="menu">
            <ul>
                <li><a href="index.php">Start</a></li>
                <?php $categories = getCategories($connection); ?>
                <?php if (!empty($categories)): ?>
                    <?php while ($category = mysqli_fetch_assoc($categories)): ?>
                        <li><a href="category.php?ID=<?= $category['ID'] ?>"><?= $category['Name'] ?></a></li>
                    <?php endwhile; ?>
                <?php endif; ?>
                <li><a href="index.php">About me</a></li>
                <li><a href="index.php">Contact</a></li>
            </ul>
        </nav>

        <!-- Clear Fix -->
        <div class="clearfix"></div>

    </header>

    <div class="container">