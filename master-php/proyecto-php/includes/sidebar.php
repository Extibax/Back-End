<!-- Sidebar -->
<aside class="sidebar">
    <!-- Log in -->
    <?php if (isset($_SESSION['user'])): ?>
    <div class="logged-in block-aside">
        <h3>Bienvenido: <?=$_SESSION['user']['First_name'] . ' ' . $_SESSION['user']['Email'];?></h3>
        <!-- Buttons -->
        <a href="create-category.php" class="btn btn-green">Create category</a>
        <a href="create-entry.php" class="btn">Create entries</a>
        <a href="my-data.php" class="btn btn-orange">My data</a>
        <a href="log-out.php" class="btn btn-red">Log out</a>
    </div>
    <?php endif;?>

    <?php if (!isset($_SESSION['user'])): ?>
    <div class="log-in block-aside">
        <h3>Log in</h3>
        <?php if (isset($_SESSION['log_in_error'])): ?>
            <div class="alert alert-error">
                <?= $_SESSION['log_in_error']; ?>
            </div>
        <?php endif;?>

        <form action="log-in.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" class="email">
            <label for="password">Password</label>
            <input type="password" name="password" class="password">
            <input type="submit" value="Sign in">
        </form>
    </div>

    <!-- Sign up -->
    <div class="sign-up block-aside">
        <h3>Sign up</h3>

        <!-- Show Errors & Completed ones -->
        <?php if (isset($_SESSION['completed'])): ?>
        <div class="alert alert-success">
            <?=$_SESSION['completed']?>
        </div>
        <?php elseif (isset($_SESSION['errors']['general'])): ?>
        <div class="alert alert-error">
            <?=$_SESSION['errors']['general']?>
        </div>
        <?php endif;?>
        <form action="sign-up.php" method="POST">

            <label for="first-name">First Name</label>
            <input type="text" name="first-name" class="first-name">
            <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'first-name') : '' ?>

            <label for="last-name">Last Name</label>
            <input type="text" name="last-name" class="last-name">
            <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'last-name') : '' ?>

            <label for="email">Email</label>
            <input type="email" name="email" class="email">
            <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'email') : '' ?>

            <label for="password">Password</label>
            <input type="password" name="password" class="password">
            <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'password') : '' ?>

            <input type="submit" name="submit" value="Sign up">
        </form>
        <?php deleteErrors();?>
    </div>
    <?php endif;?>
</aside>