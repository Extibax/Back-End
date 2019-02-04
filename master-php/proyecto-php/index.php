<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Meta UTF-8 -->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!-- Meta Refresh -->
    <meta http-equiv="refresh" content="5" >
    <!-- Link CSS -->
    <link rel='stylesheet' href='assets/css/style.css'>

    <title>VideoGames Blog</title>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <!-- Logo -->
        <div class="logo">
            <a href="index.php">
                VideoGames Blog
            </a>
        </div>
        <!-- Menu -->
        <nav class="menu">
            <ul>
                <li><a href="index.php">Start</a></li>
                <li><a href="paginahere">Category 1</a></li>
                <li><a href="paginahere">Category 2</a></li>
                <li><a href="paginahere">Category 3</a></li>
                <li><a href="paginahere">Category 4</a></li>
                <li><a href="paginahere">About me</a></li>
                <li><a href="paginahere">Contact</a></li>
            </ul>
        </nav>

        <!-- Clear Fix -->
        <div class="clearfix"></div>

    </header>

    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <!-- Sign in -->
            <div class="sign-in block-aside">
                <h3>Sign in</h3>
                <form action="sign-in.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="email">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="password">
                    <input type="submit" value="Sign in">
                </form>
            </div>
            <!-- Sign up -->
            <div class="sign-up block-aside">
                <h3>Sign in</h3>
                <form action="sign-up.php" method="POST">
                    <label for="first-name">First Name</label>
                    <input type="text" name="first-name" class="first-name">
                    <label for="second-name">Second Name</label>
                    <input type="text" name="second-name" class="second-name">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="email">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="password">
                    <input type="submit" value="Sign up">
                </form>
            </div>
        </aside>

        <!-- Main -->
        <div class="main">
            <h1>Last Updates</h1>
            <article class="entries">
                <a href="">
                    <h2>Title of my entri</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eleifend erat odio, eu pharetra lacus pulvinar ut. Quisque dapibus diam risus
                    </p>
                </a>
            </article>
            <article class="entries">
                <a href="">
                    <h2>Title of my entri</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eleifend erat odio, eu pharetra lacus pulvinar ut. Quisque dapibus diam risus
                    </p>
                </a>
            </article>
            <article class="entries">
                <a href="">
                    <h2>Title of my entri</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eleifend erat odio, eu pharetra lacus pulvinar ut. Quisque dapibus diam risus
                    </p>
                </a>
            </article>
            <article class="entries">
                <a href="">
                    <h2>Title of my entri</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eleifend erat odio, eu pharetra lacus pulvinar ut. Quisque dapibus diam risus
                    </p>
                </a>
            </article>
            <div class="view-all">
                <a href="">View all entries</a>
            </div>
        </div>

        <!-- Clear Fix -->
        <div class="clearfix"></div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>Development for Juan Bedoya &copy; 2019</p>
    </footer>

</body>

</html>