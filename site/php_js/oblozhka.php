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

<body id="body" class=1>
<div id="back" class="Main">
    <div class="column1">
        <a href="oblozhka.php" id="sl1" class="b">ProMenya</a>
    </div>
    <div class="column2">
        <a href="mainMenu.php"id="sl2" class="ctr"> Главная </a>
        <a href="mlidm.php" id="sl3" class="ctr"> Лабы по Млидм </a>
        <a href="gallery.php" id="sl4" class="ctr">Галерея</a> 
        <a href="contacts.php" id="sl5" class="ctr">Контакты</a> 
        <?php if(isset($_SESSION['logged_user'])): ?>
            <a href="redaction.php" id="sl6" class="ctr"><?php echo $_SESSION['logged_user']->login;?></a>
        <?php else: ?>
            <a href="avtorizacia.php" id="sl6" class="ctr">Вход</a>
        <?php endif; ?> 
        <div class="colocol" id="colocol">
            <img src='/site/img/icon1.png'>
        </div>   
    </div>
</div>
<div id="back1" class="text1">
    <strong><d id="str">About Me..</d></strong><br>
</div>
<div id="back2" class="text2">
    <div class="text">
        <b><pr id="str1">Этот сайт разработал в 2022 году </pr><br>
        <pr><k id="str2">Сагдеев Максим</k></pr><br>
        <pr id="str3">Группа ИВТАСбд-12</pr><br>
        <pr id="str4">Здесь вы сможете узнать немного обо мне</pr></b><br>
    </div>
</div>
<div id="footer" class="footer">
    <p><p1 id="str5">© ProMenya.com</p1></p>
    <p><p2 id="str6">Заходя на этот сайт с вашего счета автоматически списывают все деньги, спасибо.</p2></p>
</div>
</body>
<script src="event.js"></script>
</html>