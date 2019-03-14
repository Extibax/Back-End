<?php require_once 'includes/redirection.php' ?>
<?php require_once 'includes/header.php' ?>

<?php require_once 'includes/sidebar.php' ?>

<div id="main">
    <h1>Create Entry</h1>
    <br>
    <p>
        Add new categories to the blog so that users can use them when creating their posts
    </p>
    <br>
    <form action="save_entry.php" method="POST">
        <?php $create_entry_errors = isset($_SESSION['error']['create_entry']) ? $_SESSION['error']['create_entry'] : false ?>
        <?= isset($_SESSION['error']['create_entry']) ? showSessionMessages($create_entry_errors['entry_title'], "error") : false ?>
        <label for="entry_title">Title:</label>
        <input type="text" name="entry_title">

        <?= isset($_SESSION['error']['create_entry']) ? showSessionMessages($create_entry_errors['entry_description'], "error") : false ?>
        <label for="entry_description">Description:</label>
        <textarea type="text" name="entry_description" rows="8" cols="106"></textarea>

        <?= isset($_SESSION['error']['create_entry']) && isset($create_entry_errors['entry_category']) ? 
        showSessionMessages($create_entry_errors['entry_category'], "error") : false ?>
        <label for="entry_category">Category:</label>
        <select name="entry_category">
            <?php $categories = getCategories($connection) ?>
            <?php if (!empty($categories)): ?>
                <?php while($category = mysqli_fetch_assoc($categories)): ?>
                    <option value="<?= $category['ID'] ?>">
                        <?= $category['Name'] ?>
                    </option>
                <?php endwhile; ?>
            <?php endif; ?>
        </select>

        <input type="submit" name="save_entry" value="Save">
    </form>
    <?php clearSessionMessages() ?>

</div>

<?php require_once 'includes/footer.php' ?>