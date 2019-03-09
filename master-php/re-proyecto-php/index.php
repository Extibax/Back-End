<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Videogames Blog</title>
</head>

<body>
    <!-- Header -->
    <header id=header>
        <div id="logo">
            <a href="index.php">Videogames Blog</a>
        </div>
        <!-- Menu -->
        <nav id="nav">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="index.php">Category 1</a>
                </li>
                <li>
                    <a href="index.php">Category 2</a>
                </li>
                <li>
                    <a href="index.php">About me</a>
                </li>
                <li>
                    <a href="index.php">Contact</a>
                </li>
            </ul>
        </nav>
        <div class="clear-fix">

        </div>
    </header>
    <div id="container">
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
                <form action="register.php" method="POST">
                    <label for="register_first_name">First Name</label>
                    <input type="text" name="register_first_name">

                    <label for="register_last_name">Last Name</label>
                    <input type="text" name="register_last_name">

                    <label for="email">Email</label>
                    <input type="email" name="email" id="register_email">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="register_password">

                    <input type="submit" value="Register">
                </form>
            </div>
        </aside>
        <!-- Main box -->
        <div id="main">
            <h1>Lasted entries</h1>
            <article class="entry">
                <h2>Title of my entry</h2>
                <a href="">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore unde laudantium rerum vitae
                        possimus voluptatem illo praesentium numquam vero voluptatum dolor repudiandae aut nobis,
                        tenetur
                        aliquam, atque repellendus eius soluta.
                    </p>
                </a>
            </article>

            <article class="entry">
                <h2>Title of my entry</h2>
                <a href="">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore unde laudantium rerum vitae
                        possimus voluptatem illo praesentium numquam vero voluptatum dolor repudiandae aut nobis,
                        tenetur
                        aliquam, atque repellendus eius soluta.
                    </p>
                </a>
            </article>

            <article class="entry">
                <h2>Title of my entry</h2>
                <a href="">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore unde laudantium rerum vitae
                        possimus voluptatem illo praesentium numquam vero voluptatum dolor repudiandae aut nobis,
                        tenetur
                        aliquam, atque repellendus eius soluta.
                    </p>
                </a>
            </article>

            <article class="entry">
                <h2>Title of my entry</h2>
                <a href="">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore unde laudantium rerum vitae
                        possimus voluptatem illo praesentium numquam vero voluptatum dolor repudiandae aut nobis,
                        tenetur
                        aliquam, atque repellendus eius soluta.
                    </p>
                </a>
            </article>
        </div>
    </div>
    <div class="clear-fix"></div>
    <!-- Footer -->
    <footer id="footer">
        <p>Develop by Juan Bedoya &copy; 2019</p>
    </footer>
</body>

</html>