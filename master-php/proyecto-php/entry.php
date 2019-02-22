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
    <h2></h2>
    
</div>

<?php require_once 'includes/footer.php'?>