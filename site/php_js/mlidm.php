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

<body id="body" class=3>
<canvas id="canvas"></canvas>
<script src="matrix.js"></script>
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

<div class="Labs">
    <div id="Mylab" class="Mylab">
        Мои лабораторные работы.
    </div> 
</div>
<div id="squid" class="squid">
    <img class="squid1" src="https://media4.giphy.com/media/jepNhL14TGHJe/giphy.gif?cid=ecf05e47vplene9uaajw4ln7k15d2kz76d1geclyq4f60ivt&rid=giphy.gif&ct=g">
    <img class="squid2" src="https://media4.giphy.com/media/jepNhL14TGHJe/giphy.gif?cid=ecf05e47vplene9uaajw4ln7k15d2kz76d1geclyq4f60ivt&rid=giphy.gif&ct=g">
    <img class="squid3" src="https://media4.giphy.com/media/jepNhL14TGHJe/giphy.gif?cid=ecf05e47vplene9uaajw4ln7k15d2kz76d1geclyq4f60ivt&rid=giphy.gif&ct=g">
    <img class="squid4" src="https://media4.giphy.com/media/jepNhL14TGHJe/giphy.gif?cid=ecf05e47vplene9uaajw4ln7k15d2kz76d1geclyq4f60ivt&rid=giphy.gif&ct=g">
    <img class="squid5" src="https://media4.giphy.com/media/jepNhL14TGHJe/giphy.gif?cid=ecf05e47vplene9uaajw4ln7k15d2kz76d1geclyq4f60ivt&rid=giphy.gif&ct=g">
    <img class="squid6" src="https://media4.giphy.com/media/jepNhL14TGHJe/giphy.gif?cid=ecf05e47vplene9uaajw4ln7k15d2kz76d1geclyq4f60ivt&rid=giphy.gif&ct=g">
</div>
<div id="Labs" class="Labs">
    <div class="Dislab">
        <t id="DM" >Дискретная математика:</t><br><br>
        <a id="Lab1" href="/mlidm/mlidmLab1.php" class="mlidm"> Лаб 1: Множества</a>
        <a id="Lab2" href="/mlidm/mlidmLab2.php" class="mlidm"> Лаб 2: Массив 4х4</a>
        <a id="Lab3" href="/mlidm/mlidmLab3.php" class="mlidm"> Лаб 3: Отношения</a>
        <a id="Lab4" href="/mlidm/mlidmLab4.php" class="mlidm"> Лаб 4: Графы</a>
        <a id="Lab5" href="/mlidm/mlidmLab5.php" class="mlidm"> Лаб 5: Матрица достижимости</a>
    </div>   
</div>
</body>
<script src="event.js"></script>
</html>