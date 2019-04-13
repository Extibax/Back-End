<?php require_once 'includes/redirection.php' ?>
<?php require_once 'includes/header.php' ?>

<?php $current_entry = getEntry($connection, $_GET['ID']) ?>

<?php !isset($current_entry['ID']) ? header("Location: index.php") : false ?>

<div id="main">
    <h1>Edit Entry</h1>
    <br>
    <p>
        Edit your entry <?= $current_entry['Title'] ?>
    </p>
    <br>
    <form action="save_entry.php?edit=<?= $current_entry['ID'] ?>" method="POST">
        <?= isset($_SESSION['edit_entry_error']['entry_title']) ? showSessionMessages($_SESSION['edit_entry']['entry_title'], "error") : false ?>
        <label for="entry_title">Title:</label>
        <input type="text" name="entry_title" value="<?= $current_entry['Title'] ?>">

        <?= isset($_SESSION['edit_entry_error']['entry_description']) ? showSessionMessages($_SESSION['edit_entry']['entry_title'], "error") : false ?>
        <label for="entry_description">Description:</label>
        <textarea type="text" name="entry_description" rows="8" cols="106"><?= $current_entry['Description'] ?></textarea>

        <?= isset($_SESSION['edit_entry_error']['entry_category']) ? showSessionMessages($_SESSION['edit_entry']['entry_title'], "error") : false ?>
        <label for="entry_category">Category:</label>
        <select name="entry_category">
            <?php $categories = getCategories($connection) ?>
            <?php if (!empty($categories)) : ?>
            <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
            <option value="<?= $category['ID'] ?>" <?= ($category['ID'] == $current_entry['Category_id']) ? "selected='selected'" : '' ?>>
                <?= $category['Name'] ?>
            </option>
            <?php endwhile; ?>
            <?php endif; ?>
        </select>

        <input type="submit" name="save_entry" value="Save">
    </form>
    <?php clearSessionMessages() ?>

</div>

<?php require_once 'includes/sidebar.php' ?>