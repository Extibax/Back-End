<?php require_once 'helpers.php' ?>

<!-- Sidebar -->
<aside class="sidebar">
            <!-- Log in -->
            <div class="log-in block-aside">
                <h3>Log in</h3>
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
                <?php if(isset($_SESSION['completed'])): ?>
                    <div class="alert alert-success">
                        <?= $_SESSION['completed'] ?>
                    </div>
                <?php elseif(isset($_SESSION['errors']['general'])): ?>
                    <div class="alert alert-error">
                        <?= $_SESSION['errors']['general'] ?>
                    </div>
                <?php endif; ?>
                <form action="sign-up.php" method="POST">

                    <label for="first-name">First Name</label>
                    <input type="text" name="first-name" class="first-name">
                    <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'first-name') : '' ?>

                    <label for="second-name">Second Name</label>
                    <input type="text" name="second-name" class="second-name">
                    <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'second-name') : '' ?>

                    <label for="email">Email</label>
                    <input type="email" name="email" class="email">
                    <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'email') : '' ?>

                    <label for="password">Password</label>
                    <input type="password" name="password" class="password">
                    <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'password') : '' ?>

                    <input type="submit" name="submit" value="Sign up">
                </form>
                <?php deleteErrors(); ?>
            </div>
        </aside>