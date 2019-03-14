<!-- Sidebar -->
<aside id="sidebar">

    <?php if (isset($_SESSION['user'])): ?>
        <div id="user-block" class="block-aside" style="text-align: center;">
            <h3>Welcome: <?= $_SESSION['user']['First_name'] .' '. $_SESSION['user']['Last_name'] ?></h3>

            <a class="button button-large" href="create_entry.php">Create Entry</a>
            <a class="button button-orange button-large" href="create_category.php">Create Category</a>
            <a class="button button-green button-large" href="my_data.php">My Data</a>
            <a class="button button-red button-large" href="actions/close_session.php" class="button">Logout</a>
        </div>
    <?php endif; ?>

    <!-- Login -->
    <?php if (!isset($_SESSION['user'])): ?>
    <div id="login" class="block-aside">
        <h3>Identify</h3>

        <?= isset($_SESSION['login_errors']['general']) ? showSessionMessages($_SESSION['login_errors']['general'], "error") : false ?>

        <form action="login.php" method="POST" novalidate>
            
            <label for="login_email">Email</label>
            <input type="email" name="login_email" id="login_email">
            
            <label for="login_password">Password</label>
            <input type="password" name="login_password" id="login_password">

            <input type="submit" name="login_submit" value="Login">
        </form>
    </div>

    <!-- Register -->
    <div id="register" class="block-aside">
        <h3>Identify</h3>

        <?= isset($_SESSION['register_success']) ? showSessionMessages($_SESSION['register_success'], "success") : false ?>
        <?= isset($_SESSION['register_errors']['general']) ? showSessionMessages($_SESSION['register_errors']['general'], "error") : false ?>

        <form action="register.php" method="POST" novalidate>
            <?= isset($_SESSION['register_errors']['first_name']) ? showSessionMessages($_SESSION['register_errors']['first_name'], "error") : false ?>
            <label for="register_first_name">First Name</label>
            <input type="text" name="register_first_name">

            <?= isset($_SESSION['register_errors']['last_name']) ? showSessionMessages($_SESSION['register_errors']['last_name'], "error") : false ?>
            <label for="register_last_name">Last Name</label>
            <input type="text" name="register_last_name">

            <?= isset($_SESSION['register_errors']['email']) ? showSessionMessages($_SESSION['register_errors']['email'], "error") : false ?>
            <label for="email">Email</label>
            <input type="email" name="register_email">

            <?= isset($_SESSION['register_errors']['password']) ? showSessionMessages($_SESSION['register_errors']['password'], "error") : false ?>
            <label for="password">Password</label>
            <input type="password" name="register_password">

            <input type="submit" name="register_submit" value="Register">
        </form>
        <?php clearSessionMessages() ?>
    </div>
    <?php endif; ?>
</aside>