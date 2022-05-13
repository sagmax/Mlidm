<!DOCTYPE html>
<html lang="en">
<?php
    require 'db.php';
    ?>
<head>
    <meta charset="UTF-8">
    <title>MySite</title>
    <link href='http://fonts.googleapis.com/css?family=Stalinist+One&amp;amp;amp;subset=cyrillic' rel='stylesheet' type='text/css' />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="/site/css/gallery.css">
    
    <script src="/site/php_js/gallery.js"></script>
</head>

<body id="body" class=4>
<canvas id="canvas" > </canvas>
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

<div class="column">
    <div id="text" class="text">
        <ctr> Эта галерея посвящена моим машинам (воображаемым) </ctr>
    </div>
</div>
<div class="gallery">
    <input id="button1" class="button1" type="button" value="left"  onclick="leftImg()" />
     <div id="mainImage">

    </div>
    <input id="button2" class="button2" type="button" value="right"  onclick="rightImg()"/> 
</div>
 
</body>
<script src="event.js"></script>
</html>