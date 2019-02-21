<?php require_once 'includes/connection.php'?>
<?php require_once 'includes/helpers.php'?>

<?php 
    $current_category = getCategory($connection, $_GET['ID']);
    if (!isset($current_category['ID'])) {
        header('Location: index.php');
    }
?>

<?php require_once 'includes/header.php'?>
<?php require_once 'includes/sidebar.php'?>

<!-- Main -->
<div class="main">

    <h1>Entries of <?= $current_category['Name'] ?></h1>

    <?php $entries = getEntries($connection, null, $_GET['ID']); ?>
    <?php if (!empty($entries) && mysqli_num_rows($entries) >= 1): ?>
        <?php while ($entry = mysqli_fetch_assoc($entries)): ?>
            <article class="entries">
                <a href="entry.php?id=<?= $entry['ID']; ?>">
                    <h2><?= $entry['Title']; ?></h2>
                    <span class="category-date"><?= $entry['Category'].' | '.$entry['Date']; ?></span>
                    <p>
                        <?= substr($entry['Description'], 0, 180). '...';  ?>
                    </p>
                </a>
            </article>
        <?php endwhile ?>
    <?php else: ?>
    <div class="alert alert-error">No entries in this category</div>
<?php endif ?>
</div>

<?php require_once 'includes/footer.php'?>