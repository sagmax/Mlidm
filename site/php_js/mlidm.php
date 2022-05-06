<!DOCTYPE html>
<html lang="en">
<?php
    require 'db.php';
    ?>
<head>
    <meta charset="UTF-8">
    <title>MySite</title>
    <link rel="stylesheet" href="/site/css/mlidm.css">
</head>

<body>
<canvas id="canvas"></canvas>
<script src="matrix.js"></script>
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
<img class="squid1" src="https://media4.giphy.com/media/jepNhL14TGHJe/giphy.gif?cid=ecf05e47vplene9uaajw4ln7k15d2kz76d1geclyq4f60ivt&rid=giphy.gif&ct=g">
<img class="squid2" src="https://media4.giphy.com/media/jepNhL14TGHJe/giphy.gif?cid=ecf05e47vplene9uaajw4ln7k15d2kz76d1geclyq4f60ivt&rid=giphy.gif&ct=g">
<img class="squid3" src="https://media4.giphy.com/media/jepNhL14TGHJe/giphy.gif?cid=ecf05e47vplene9uaajw4ln7k15d2kz76d1geclyq4f60ivt&rid=giphy.gif&ct=g">
<img class="squid4" src="https://media4.giphy.com/media/jepNhL14TGHJe/giphy.gif?cid=ecf05e47vplene9uaajw4ln7k15d2kz76d1geclyq4f60ivt&rid=giphy.gif&ct=g">
<img class="squid5" src="https://media4.giphy.com/media/jepNhL14TGHJe/giphy.gif?cid=ecf05e47vplene9uaajw4ln7k15d2kz76d1geclyq4f60ivt&rid=giphy.gif&ct=g">
<img class="squid6" src="https://media4.giphy.com/media/jepNhL14TGHJe/giphy.gif?cid=ecf05e47vplene9uaajw4ln7k15d2kz76d1geclyq4f60ivt&rid=giphy.gif&ct=g">
<div class="Labs">
    <div class="Mylab">
        Мои лабораторные работы.
    </div>   
    <div class="Dislab">
        <t>Дискретная математика:</t><br><br>
        <a href="/mlidm/mlidmLab1.php" class="mlidm"> Лаб 1: Множества</a>
        <a href="/mlidm/mlidmLab2.php" class="mlidm"> Лаб 2: Массив 4х4</a>
        <a href="/mlidm/mlidmLab3.php" class="mlidm"> Лаб 3: Отношения</a>
        <a href="/mlidm/mlidmLab4.php" class="mlidm"> Лаб 4</a>
        <a href="/mlidm/mlidmLab5.php" class="mlidm"> Лаб 5</a>
    </div>   
</div>
</body>
</html>