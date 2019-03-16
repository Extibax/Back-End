<?php session_start() ?>
<?php if (isset($_SESSION['user'])): ?>

<!DOCTYPE html>
<html>

<head>
    <!-- Import Scripts -->
    <?php require_once "scripts.php" ?>

    <title>Start</title>
</head>

<body>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="jumbotron">
                    <h2>You entered successfully</h2>
                    <a href="php/log_out.php" class="btn btn-info">Log out</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php else: ?>

<?php header("location:index.php") ?>

<?php endif ?>