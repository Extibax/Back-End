<?php require_once 'includes/header.php' ?>

<?php require_once 'includes/sidebar.php' ?>
<!-- Main box -->
<div id="main">
    <h1>Lasted entries</h1>
    <?php $entries = getEntries($connection) ?>
    <?php if (!empty($entries)) : ?>
        <?php while ($entry = mysqli_fetch_assoc($entries)): ?>
        <article class="entry">
        <a href="entry.php?ID=<?= $entry['ID'] ?>"><h2><?= $entry['Title'] ?></h2></a>
        <a href="category.php?ID=<?= $entry['Category_id'] ?>"><p><?= $entry['Name'] ?></p></a>
            <p>
                <?= substr($entry['Description'], 0, 180)."..." ?>
            </p>
        </article>
        <?php endwhile; ?>
    <?php endif; ?>
    <div id="show-all">
        <a href="#">Show All Entries</a>
    </div>
</div>

<?php require_once 'includes/footer.php' ?>
</body>

</html>