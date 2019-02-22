<?php require_once 'includes/header.php'?>

<?php require_once 'includes/sidebar.php'?>

<!-- Main -->
<div class="main">
    <h1>Last Updates</h1>

    <?php $entries = getEntries($connection, true); ?>
    <?php if (!empty($entries)): ?>
        <?php while ($entry = mysqli_fetch_assoc($entries)): ?>
            <article class="entries">
                <a href="entry.php?ID=<?= $entry['ID'] ?>">
                    <h2><?= $entry['Title']; ?></h2>
                    <span class="category-date"><?= $entry['Category'].' | '.$entry['Date']; ?></span>
                    <p>
                        <?= substr($entry['Description'], 0, 180). '...';  ?>
                    </p>
                </a>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
    
    <div class="view-all">
        <a href="entries.php">View all entries</a>
    </div>
</div>

<?php require_once 'includes/footer.php'?>