<?php require_once 'includes/redirection.php' ?>
<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/sidebar.php' ?>

<div class="main">
    <h1>Create Category</h1>
    <p>
        Add new categories to the blog so
        that users can use them when creating their posts.
    </p>
    <br>
    <form action="save-category.php" method="POST">
        <label for="name">Name of Category</label>
        <input type="text" name="name" class="name-category">

        <input type="submit" value="Save">
    </form>
</div>

<?php require_once 'includes/footer.php'?>