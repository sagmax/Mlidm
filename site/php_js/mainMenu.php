<!DOCTYPE html>
<html lang="en">
<?php
    require 'db.php';
    ?>
<head>
    <meta charset="UTF-8">
    <title>MainMenu</title>
    <link href='http://fonts.googleapis.com/css?family=Stalinist+One&amp;amp;amp;subset=cyrillic' rel='stylesheet' type='text/css' >
    <link rel="stylesheet" href="/site/css/mainMenu.css">
</head>
<canvas id="canvas"></canvas>
<script src="matrix.js"></script>

<body id="body" class=2>
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

<div class="Tema">
    <div id="Photo" class="Photo">
        <img class="Iam" src='/site/img/MyPhoto.jpg'>
    </div>
    <div id="Cherta" class="Cherta">
       
    </div>
    <div class="Text">
        <div id="MainStroka" class="MainStroka">
            Здесь вы узнаете что же я люблю делать..
        </div>
        <div class="Stroki">
        <br><br><br>
            <t id="Stroka1"> 1. Играть в машинки </t><br>
            <br><br><br><br>
            <t id="Stroka2"> 2. Рисовать на бумаге</t><br>
            <br><br><br><br>
            <t id="Stroka3"> 3. Лазить по лестнице</t><br><br><br><br><br>

        </div>
    </div>
</div>
</body>
<script src="event.js"></script>
</html>