<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MySite</title>
    <link href='http://fonts.googleapis.com/css?family=Stalinist+One&amp;amp;amp;subset=cyrillic' rel='stylesheet' type='text/css' />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="/Site/Css/Gallery.css">
    
    <script src="/Site/Php_js/Gallery.js"></script>
</head>

<body>
<div class="Main">
    <div class="column1">
        <a href="Oblozhka.php" class="b">ProMenya</a>
    </div>
    <div class="column2">
        <a href="MainMenu.php" class="ctr"> Главное меню </a>
        <a href="Mlidm.php" class="ctr"> Лабы по Млидм </a>
        <a href="Gallery.php"class="ctr">Галерея</a> 
        <a href="Contacts.php"class="ctr">Контакты</a> 
        <a href="Avtorizacia.php"class="ctr">Вход</a>
        <div class="colocol" onclick="alert('динь-динь')">
            <img src='/Site/Img/icon1.png'>
        </div>   
    </div>
</div>
<div class="column">
    <div class="text">
        <ctr> Эта галерея посвящена моим машинам (воображаемым) </ctr>
    </div>
</div>
<canvas id="canvas"></canvas>
</div>
<script src="Matrix.js"></script>
<div class="gallery">
     <input type="button" value="left"  onclick="leftImg()" />
     <div id="mainImage">

    </div>
     <input type="button" value="right"  onclick="rightImg()"/>
</div>
</body>

</html>