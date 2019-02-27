<?php require_once 'connection.php' ?>

<?php require_once 'includes/header.php' ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                <strong>Hey You!</strong> <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset() ?>
            <?php endif ?>
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control"
                            placeholder="Task Description"></textarea>
                    </div>
                    <input class="btn btn-success btn-block" type="submit" name="save_task" value="Save Task">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "SELECT * FROM tasks";
                        $result = mysqli_query($connection, $query);
                    ?>

                    <?php while ($row = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td>
                            <?= $row['Title'] ?>
                        </td>
                        <td>
                            <?= $row['Description'] ?>
                        </td>
                        <td>
                            <?= $row['Created_at'] ?>
                        </td>
                        <td>
                            <div class="btn-group d-flex justify-content-around">
                                <a class="btn btn-warning" href="edit_task.php?ID=<?= $row['ID'] ?>">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a class="btn btn-danger" href="delete_task.php?ID=<?= $row['ID'] ?>">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php' ?>