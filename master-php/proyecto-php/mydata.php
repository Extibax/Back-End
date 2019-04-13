<?php require_once 'includes/redirection.php' ?>
<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/sidebar.php' ?>

<div id="main">
    <h1>My Data</h1>
    <br>
    <?= isset($_SESSION['success']) ? showSessionMessages($_SESSION['success'], "success") : false ?>
    <form action="update_mydata.php" method="POST" novalidate>
        <?= isset($_SESSION['update_mydata_error']['update_mydata']) ? showSessionMessages($_SESSION['update_mydata_error']['mydata_email'], "error") : false ?>
        <label for="mydata_first_name">First Name</label>
        <input type="text" name="mydata_first_name" value="<?= $_SESSION['user']['First_name'] ?>">

        <?= isset($_SESSION['update_mydata_error']['mydata_last_name']) ? showSessionMessages($_SESSION['update_mydata_error']['mydata_email'], "error") : false ?>
        <label for="mydata_last_name">Last Name</label>
        <input type="text" name="mydata_last_name" value="<?= $_SESSION['user']['Last_name'] ?>">

        <?= isset($_SESSION['update_mydata_error']['mydata_email']) ? showSessionMessages($_SESSION['update_mydata_error']['mydata_email'], "error") : false ?>
        <label for="mydata_email">Email</label>
        <input type="email" name="mydata_email" value="<?= $_SESSION['user']['Email'] ?>">

        <input type="submit" name="mydata_submit" value="Update">
    </form>
    <?php clearSessionMessages() ?>
</div>

<?php require_once 'includes/footer.php' ?> 