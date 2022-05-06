<?php
    require 'db.php';
    $user=R::load('users', $_GET["id"]);

    if ($user->type == 0){
        $userdelete = R::load('users', $_GET["id"] );
        R::trash($userdelete);
        header('location: /site/php_js/redaction.php');
    }else{
        header('location: /site/php_js/redaction.php');
    }
?>
