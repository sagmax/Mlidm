<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="/Site/Css/Avtorizacia.css">
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
<div class="avtorizacia">	
	<div class="verh">
		<ul class="spisok" >
			<li div class="slovo">Авторизация</li>
		</ul>
	</div>            
	<input name="login" type="text" class="avtorizaciya" placeholder="login"><Br>
	<input name="password" type="text" class="avtorizaciya" placeholder="password"><Br>	
	<str><input type="submit" class="avtorizaciya" placeholder="Отправить"></str>
	<div class="ssilku">
		<div class="ssilka"><a class="ssilka"  href="">Зарегистрироваться</a><br></div>
		<div class="ssilka"><a class="ssilka" href="Oblozhka.php">На главную</a></div>
	</div>			
</div>
        <script>
            function guidance(element){
                element.setAttribute("class", "guidance");
            }
            function noguidance(element){
                element.setAttribute("class", "noguidance");
            } 
        </script>	

</body>

</html>