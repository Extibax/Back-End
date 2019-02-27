<?php require_once 'includes/connection.php'?>
<?php require_once 'includes/helpers.php'?>

<?php 
    $current_entry = getEntry($connection, $_GET['ID']);
    /* var_dump($current_entry);
    die(); */
    if (!isset($current_entry['ID'])) {
        header('Location: index.php');
    }
?>

<?php require_once 'includes/header.php'?>
<?php require_once 'includes/sidebar.php'?>

<!-- Main -->
<div class="main">

    <h1><?= $current_entry['Title'] ?></h1>
    <a href="category.php?ID=<?= $current_entry['Category_id'] ?>" >
        <h2><?= $current_entry['Category'] ?></h2>
    </a>
    <h4><?= $current_entry['Date'] ?></h4>
    <p><?= $current_entry['Description'] ?></p>
    <?php if(isset($_SESSION['user']) && $_SESSION['user']['ID'] == $current_entry['User_id']): ?>
        <a href="edit-entry.php" class="btn btn-orange">Edit entry</a>
        <a href="delete-entry.php" class="btn btn-red">Delete entry</a>
    <?php endif ?>
    
</div>

<?php require_once 'includes/footer.php'?>