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
        <?= isset($_SESSION['create_entry_error']['entry_title']) ? showSessionMessages($_SESSION['create_entry_error']['entry_title'], "error") : false ?>
        <label for="entry_title">Title:</label>
        <input type="text" name="entry_title">

        <?= isset($_SESSION['create_entry_error']['entry_description']) ? showSessionMessages($_SESSION['create_entry_error']['entry_description'], "error") : false ?>
        <label for="entry_description">Description:</label>
        <textarea type="text" name="entry_description" rows="8" cols="106"></textarea>

        <?= isset($_SESSION['create_entry_error']['entry_category']) ? showSessionMessages($_SESSION['create_entry_error']['entry_category'], "error") : false ?>
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