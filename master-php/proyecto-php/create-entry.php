<?php require_once 'includes/redirection.php' ?>
<?php require_once 'includes/header.php' ?>
<?php require_once 'includes/sidebar.php' ?>

<div class="main">
    <h1>Create Entry</h1>

    <form action="save-entry.php" method="POST">
        <p>
            Add new entries to the blog so
            that users can read and enjoy about us content.
        </p>
        <br>
        <label for="title" class="title-entry">Name of Entry</label>
        <input type="text" name="title">
        <?=  isset($_SESSION['entry_errors']) ? showErrors($_SESSION['entry_errors'], 'title') : '' ?>

        <label for="description">Description</label>
        <textarea name="description" class="entry-description" style="resize: none;"></textarea>
        <?= isset($_SESSION['entry_errors']) ? showErrors($_SESSION['entry_errors'], 'description') : '' ?>

        <label for="category" class="category">Select the Category</label>
        <select name="category" class="select-category">
            <?php $categories = getCategories($connection) ?>
            <?php if (!empty($categories)): ?>
            <?php while ($category = mysqli_fetch_assoc($categories)): ?>
                <option value="<?= $category['ID'] ?>">
                    <?= $category['Name'] ?>
                </option>
            <?php endwhile ?>
            <?php endif ?>
        </select>
        <?= isset($_SESSION['entry_errors']) ? showErrors($_SESSION['entry_errors'], 'category') : '' ?>

        <input type="submit" value="Save">
    </form>
    <?php deleteErrors() ?>
</div>

<?php require_once 'includes/footer.php' ?>