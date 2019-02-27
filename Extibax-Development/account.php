<?php require_once 'includes/header.php' ?>

<!-- Main -->
<section class="main">

    <form class="form" action="index.php">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password</label>
            <input type="password" class="form-control" id="pwd">
        </div>
        <button class="btn btn-default btn-primary" type="submit">Log in</button>
    </form>

    <?php require_once 'includes/footer.php' ?>