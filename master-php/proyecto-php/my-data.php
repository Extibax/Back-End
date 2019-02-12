<?php require_once 'includes/redirection.php' ?>
<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/sidebar.php' ?>

<!-- Main -->
<div class="main">
    <h1>My Data</h1>

    <!-- Show Errors & Completed ones -->
    <?php if (isset($_SESSION['completed'])): ?>
    <div class="alert alert-success">
        <?=$_SESSION['completed']?>
    </div>
    <?php elseif (isset($_SESSION['errors']['general'])): ?>
    <div class="alert alert-error">
        <?= $_SESSION['errors']['general'] ?>
    </div>
    <?php endif ?>
    <form action="update-data.php" method="POST">

        <label for="first-name">First Name</label>
        <input type="text" name="first-name" class="first-name" value="<?= $_SESSION['user']['First_name'] ?>">
        <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'first-name') : '' ?>
        
        <label for="last-name">Last Name</label>
        <input type="text" name="last-name" class="last-name" value="<?= $_SESSION['user']['Last_name'] ?>">
        <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'last-name') : '' ?>

        <label for="email">Email</label>
        <input type="email" name="email" class="email" value="<?= $_SESSION['user']['Email'] ?>">
        <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'email') : '' ?>

        <input type="submit" name="submit" value="Update">
    </form>
    <?php deleteErrors() ?>
</div>

<?php require_once 'includes/footer.php' ?>