<?php
require 'inc/head.php';

foreach ($_COOKIE as $key=>$cart) {
    unset($_COOKIE[$key]);
    setcookie($key, '', time() - 3600);
}


session_destroy();

header('Location: index.php');
?>