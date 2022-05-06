<?php
    require 'db.php';
    unset($_SESSION['logged_user']);
    header('location: /site/php_js/oblozhka.php');
?>