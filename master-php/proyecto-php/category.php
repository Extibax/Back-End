<?php require_once 'includes/header.php' ?>

<?php $current_category = getCategory($connection, $_GET['ID']) ?>

<?php !isset($current_category['ID']) ? header("Location: index.php") : false ?>

<?php require_once 'includes/sidebar.php' ?>
<!-- Main box -->
<div id="main">
    <h1>All entries of <?= $current_category['Name'] ?></h1>
    <?php $entries = getEntries($connection, false, $_GET['ID']) ?>
    <?php if (!empty($entries)) : ?>
        <?php while ($entry = mysqli_fetch_assoc($entries)): ?>
        <article class="entry">
        <a href="entry.php?ID=<?= $entry['ID'] ?>"><h2><?= $entry['Title'] ?></h2></a>
        <span class="category_date"><?= $entry['Category_name']. " | " .$entry['Date']. " | ".$entry['User'] ?></span>
            <p>
                <?= substr($entry['Description'], 0, 180)."..." ?>
            </p>
        </article>
        <?php endwhile; ?>
    <?php else: ?>
        <div class="alert alert-error">
            No entries in this category
        </div>
    <?php endif; ?>
</div>

<?php require_once 'includes/footer.php' ?>