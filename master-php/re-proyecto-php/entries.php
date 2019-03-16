<?php require_once 'includes/header.php' ?>

<?php require_once 'includes/sidebar.php' ?>
<!-- Main box -->
<div id="main">
    <h1>All entries</h1>
    <?php $entries = getEntries($connection) ?>
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
    <?php endif; ?>
</div>

<?php require_once 'includes/footer.php' ?>