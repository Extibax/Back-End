<?php

if ($_COOKIE['oneYear']) {
    unset($_COOKIE['oneYear']);
    setcookie('oneYear', '', time()-100);
}

header('Location: ver_cookies.php');