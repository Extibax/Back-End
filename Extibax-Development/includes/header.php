<!-- Juan Bedoya (Extibax Portfolio Web) -->
<!-- Created on  -->

<!DOCTYPE html>
<html lang="es">

<head>

    <!-- No cache start -->
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <!-- No cache end -->

    <!-- Meta UTF-8 -->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!-- Meta Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta Url Bar Color -->
    <meta name="theme-color" content="#d39f06bd">
    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS Font Style -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- Link JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- CSS Icons -->
    <link rel="stylesheet" href="assets/css/fontello.css">
    <!-- Logotype -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- CSS Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Link Alertify -->
    <link rel="stylesheet" href="assets/js/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" href="assets/js/alertifyjs/css/alertify.css">
    <!-- Link Alertify Scripts -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/alertifyjs/alertify.js"></script>

    <title>Extibax Developer</title>
</head>

<body>
    <!-- Container -->
    <div class="container">

        <!-- Header -->
        <header>
            <!-- Logo -->
            <div class="logo">
                <a href="index.php"><img src="assets/img/LogotypeText.png" alt="Extibax Logotype"></a>
            </div>
            <!-- Menu -->
            <nav class="menu">
                <ul>
                    <?php $index = '/projects/Extibax-Development/index.php' ?>
                    <?php if ($index == $_SERVER['PHP_SELF']): ?>
                        <li onclick="aboutMe()">About me</li>
                        <li onclick="works()">Works</li>
                        <li onclick="contact()">Contact</li>
                    <?php else: ?>
                    <a href="index.php"><li>Start</li></a>
                    <?php endif ?>
                    <a href="account.php"><li>Account</li></a>
                </ul>
            </nav>
        </header>