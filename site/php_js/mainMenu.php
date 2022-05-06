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
<div class="Tema">
    <div class="Photo">
        <img class="Iam" src='/site/img/MyPhoto.jpg'>
    </div>
    <div class="Cherta">
       
    </div>
    <div class="Text">
        <div class="MainStroka">
            Здесь вы узнаете что же я люблю делать..
        </div>
        <div class="Stroki">
        <br><br><br>
            <th> 1. Играть в машинки </th><br>
            <br><br><br><br>
            <th> 2. Рисовать на бумаге</th><br>
            <br><br><br><br>
            <th> 3. Лазить по лестнице</th><br><br><br><br><br>

        </div>
    </div>
</div>
</body>

</html>