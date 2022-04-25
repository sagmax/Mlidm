<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MySite</title>
    <link rel="stylesheet" href="/Site/Css/Mlidm.css">
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
<canvas id="canvas"></canvas>
</div>
<script src="Matrix.js"></script>
<div class="Labs">
    <div class="Mylab">
        Мои лабораторные работы!??
    </div>   
    <div class="Dislab">
        <t>Дискретная математика:</t><br><br>
        <a href="/Mlidm/MlidmLab1.php" class="mlidm"> Лаб 1: Множества</a>
        <a href="/Mlidm/MlidmLab2.php" class="mlidm"> Лаб 2: Массив 4х4</a>
        <a href="/Mlidm/MlidmLab2.php" class="mlidm"> Лаб 3</a>
        <a href="/Mlidm/MlidmLab2.php" class="mlidm"> Лаб 4</a>
        <a href="/Mlidm/MlidmLab2.php" class="mlidm"> Лаб 5</a>
    </div>   
</div>
</body>
</html>