<?php require_once 'includes/header.php' ?>

<?php $current_entry = getEntry($connection, $_GET['ID']) ?>

<?php !isset($current_entry['ID']) ? header("Location: index.php") : false ?>

<?php require_once 'includes/sidebar.php' ?>
<!-- Main box -->
<div id="main">
    <h1><?= $current_entry['Title'] ?></h1>
    <a href="category.php?ID=<?= $current_entry['Category_id'] ?>"><h2><?= $current_entry['Category_name'] ?></h2></a>
    <h4><?= $current_entry['Date'] ?> | <?= $current_entry['User'] ?></h4>
    <p>
        <?= $current_entry['Description'] ?>
    </p>

    <?php if (isset($_SESSION['user']) && $_SESSION['user']['ID'] == $current_entry['User_id']): ?>
        <br><br>
        <a class="button" href="edit_entry.php?ID=<?= $current_entry['ID'] ?>">Edit entry</a>
        <a class="button button-red" href="delete_entry.php?ID=<?= $current_entry['ID'] ?>">Delete entry</a>
    <?php endif ?>
</div>

<?php require_once 'includes/footer.php' ?>