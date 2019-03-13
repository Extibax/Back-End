<?php require_once 'helpers.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Videogames Blog</title>
</head>

<body>
    <!-- Header -->
    <header id=header>
        <div id="logo">
            <a href="index.php">Videogames Blog</a>
        </div>
        <!-- Menu -->
        <nav id="nav">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <?php $categories = getCategories($connection); ?>
                <?php while($category = mysqli_fetch_assoc($categories)): ?>
                    <li>
                        <a href="category.php?id=<?=$category['ID']?>"><?=$category['Name']?></a>
                    </li>
                <?php endwhile; ?>
                <li>
                    <a href="index.php">About me</a>
                </li>
                <li>
                    <a href="index.php">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="clear-fix">

        </div>
    </header>
    <div id="container">