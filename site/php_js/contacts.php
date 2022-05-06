<!DOCTYPE html>
<html lang="en">
<?php
    require 'db.php';
    ?>
<head>
    <meta charset="UTF-8">
    <title>MySite</title>
    <link rel="stylesheet" href="/site/css/contacts.css">
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
<canvas id="canvas"></canvas>
<script src="matrix.js"></script>
<div class="column">
    <div class="nick">
        <k>Сагдеев Максим</k>
    </div> 
    <div class="znachki">
        <a href="https://steamcommunity.com/profiles/76561198126693782/"><div class="steam"><img src="/site/img/steam.svg" ></div></a>
        <a href="https://t.me/blipblopflop"> <div class="tg"><img src="/site/img/tg.svg" ></div></a>
        <a href="https://vk.com/id228689726"><div class="vk"><img src="/site/img/vk.svg" ></div></a>
        <a href="https://github.com/sagmax"><div class="git"><img src="/site/img/git.svg" ></div></a>
    </div> 
</div>
<div class="cherta"> </div>
<div class="contact">
    <div class="text">
        <div class="s"><b>Почтовый ящик:</b> max.sagdeev@mail.ru</div>
        <div class="g"><b>Номер телефона:</b> 8-967-715-43-93</div>
    </div>
    <div class="video">
        <img class="gomer"src="https://media4.giphy.com/media/l2JdTPF2iSyQ6YZiM/giphy.gif?cid=ecf05e47pvne5eion8d4ot09bbovtb9zohs3it27kbc49xgh&rid=giphy.gif&ct=g" > </img>
    </div>
</div>
</body>
</html>