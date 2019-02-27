<?php 

require_once 'connection.php';

if (isset($_GET))
{
    $ID = $_GET['ID'];
    $query = "SELECT * FROM tasks WHERE ID = '$ID'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1)
    {
        $row = mysqli_fetch_array($result);
        $title = $row['Title'];
        $description = $row['Description'];
    }
}

if (isset($_POST['update']))
{
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = 
    "UPDATE tasks SET Title = '$title', Description = '$description' WHERE ID = '$ID'";

    $result = mysqli_query($connection, $query);

    if ($result)
    {
        $_SESSION['message'] = 'Task Was Edited';
        $_SESSION['message_type'] = 'warning';

        header('Location: index.php');
    }
}

?>

<?php require_once 'includes/header.php'; ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit_task.php?ID=<?= $ID ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" value="<?= $title ?>" class="form-control"
                            placeholder="Update Title">
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control"
                            placeholder="Update Description"><?= $description ?></textarea>
                    </div>
                    <button class="btn btn-success" name="update">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>