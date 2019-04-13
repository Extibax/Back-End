<?php require_once 'includes/redirection.php' ?>
<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/helpers.php' ?>

<?php require_once 'includes/sidebar.php' ?>

<div id="main">
    <h1>Create Category</h1>
    <br>
    <p>
        Add new categories to the blog so that users can use them when creating their posts
    </p>
    <br>
    <form action="save_category.php" method="POST">
        <?= isset($_SESSION['error']['create_category']) ? showSessionMessages($_SESSION['error']['create_category'], "error") : false ?>
        <label for="category_name">Category Name:</label>
        <input type="text" name="category_name">

        <input type="submit" name="save_category" value="Save">
    </form>
    <?php clearSessionMessages() ?>

</div>

<?php require_once 'includes/footer.php' ?>