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
  
<body id="body" class=5>
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

<canvas id="canvas"></canvas>
<script src="matrix.js"></script>

<div class="column">
    <div class="nick">
        <k id="nick">Сагдеев Максим</k>
    </div> 
    <div class="znachki">
        <a href="https://steamcommunity.com/profiles/76561198126693782/"><div id="steam" class="steam"><img src="/site/img/steam.svg" ></div></a>
        <a href="https://t.me/blipblopflop"> <div id="tg" class="tg"><img src="/site/img/tg.svg" ></div></a>
        <a href="https://vk.com/id228689726"><div id="vk" class="vk"><img src="/site/img/vk.svg" ></div></a>
        <a href="https://github.com/sagmax"><div id="git" class="git"><img src="/site/img/git.svg" ></div></a>
    </div> 
</div>
<div id="cherta" class="cherta"> </div>
<div class="contact">
    <div class="text">
        <div id="mail" class="s"><b>Почтовый ящик:</b> max.sagdeev@mail.ru</div>
        <div id="number" class="g"><b>Номер телефона:</b> 8-967-715-43-93</div>
    </div>
    <div id="gomer" class="video">
        <img class="gomer"src="https://media4.giphy.com/media/l2JdTPF2iSyQ6YZiM/giphy.gif?cid=ecf05e47pvne5eion8d4ot09bbovtb9zohs3it27kbc49xgh&rid=giphy.gif&ct=g" > </img>
    </div>
</div>
</body>
<script src="event.js"></script>
</html>