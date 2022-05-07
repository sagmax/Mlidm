<!DOCTYPE html>
<html lang="en">
<?php
    require 'db.php';
    ?>
<head>
    <meta charset="UTF-8">
    <title>MySite</title>
    <link rel="stylesheet" href="/site/css/oblozhka.css">
</head>

<body>
<div class="Main">
    <div class="column1">
        <a href="oblozhka.php" class="b">ProMenya</a>
    </div>
    <div class="column2">
        <a href="mainMenu.php" class="ctr"> Главная </a>
        <a href="mlidm.php" class="ctr"> Лабы по Млидм </a>
        <a href="gallery.php"class="ctr">Галерея</a> 
        <a href="contacts.php"class="ctr">Контакты</a> 
        <?php if(isset($_SESSION['logged_user'])): ?>
            <a href="redaction.php"class="ctr"><?php echo $_SESSION['logged_user']->login;?></a>
        <?php else: ?>
            <a href="avtorizacia.php"class="ctr">Вход</a>
        <?php endif; ?> 
        <div class="colocol" onclick="alert('динь-динь')">
            <img src='/site/img/icon1.png'>
        </div>   
    </div>
</div>
<div class="text1">
    <strong><d>About Me..</d></strong><br>
</div>
<div class="text2">
    <div class="text">
        <b><pr>Этот сайт разработал в 2022 году</pr><br>
        <pr><k>Сагдеев Максим</k></pr><br>
        <pr>Группа ИВТАСбд-12</pr><br>
        <pr>Здесь вы сможете узнать немного обо мне</pr></b><br>
    </div>
</div>
<div class="footer">
    <p><p1>© ProMenya.com</p1></p>
    <p><p2>Заходя на этот сайт с вашего счета автоматически списывают все деньги, спасибо.</p2></p>
</div>
</body>
</html>