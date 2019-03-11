<!-- Sidebar -->
<aside id="sidebar">
    <!-- Login -->
    <div id="login" class="block-aside">
        <h3>Identify</h3>
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" id="login_email">
            <label for="password">Password</label>
            <input type="password" name="password" id="login_password">

            <input type="submit" value="Login">
        </form>
    </div>

    <!-- Register -->
    <div id="register" class="block-aside">
        <h3>Identify</h3>
        <form action="register.php" method="POST" novalidate>
            <?php echo isset($_SESSION['errors']['first_name']) ? showErrors($_SESSION['errors']['first_name']) : false ?>
            <label for="register_first_name">First Name</label>
            <input type="text" name="register_first_name">

            <?php echo isset($_SESSION['errors']['last_name']) ? showErrors($_SESSION['errors']['last_name']) : false ?>
            <label for="register_last_name">Last Name</label>
            <input type="text" name="register_last_name">

            <?php echo isset($_SESSION['errors']['email']) ? showErrors($_SESSION['errors']['email']) : false ?>
            <label for="email">Email</label>
            <input type="email" name="register_email">

            <?php echo isset($_SESSION['errors']['password']) ? showErrors($_SESSION['errors']['password']) : false ?>
            <label for="password">Password</label>
            <input type="password" name="register_password">

            <input type="submit" name="submit" value="Register">
        </form>
        <?php clearErrors() ?>
    </div>
</aside>