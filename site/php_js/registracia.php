<!DOCTYPE html>
<html lang="en">
<?php
    require 'db.php';
    ?>
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="/site/css/registracia.css">
</head>

<body>
<div class="Main">
    <div class="column1">
        <a href="Oblozhka.php" class="b">ProMenya</a>
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
<?php
    $data = $_POST;
    if(isset($data['submit'])){
        $errors = array();
        if(trim($data['user_type']) == ''){
            $errors[] = 'Введите тип пользователя!';
        }
        if(trim($data['FIO']) == ''){
            $errors[] = 'Введите ФИО!';
        }
        if(trim($data['login']) == ''){
            $errors[] = 'Введите логин!';
        }
        if(trim($data['pass1']) == ''){
            $errors[] = 'Введите пароль!';
        }
        if(trim($data['pass2']) != ($data['pass1'])){
            $errors[] = 'Пароли не совпадают!';
        }
        if(R::count('users',"login = ?", array($data['login'])) > 0) {
            $errors[] = 'Такой пользователь уже существует!';
        } 
        if (empty($errors)){

            $user = R::dispense('users');
            $user->type = $data['user_type'];
            $user->fio = $data['FIO'];
            $user->login = $data['login'];
            $user->password = password_hash($data['pass2'], PASSWORD_DEFAULT);
            R::store($user);
            echo '<div style="color: green; font-size: 2rem;text-align: center; position: relative;">Регистрация прошла успешно!</div><hr>';
            header('location: /site/php_js/avtorizacia.php');
        }else{
            echo '<div style="color: red; font-size: 2rem;text-align: center; position: relative;">'.array_shift($errors).'</div><hr>';
        }
   }
    ?>
<form action="registracia.php" method="post">
    <div class="avtorizacia">	
        <div class="verh">
            <ul class="spisok" >
                <li div class="slovo">Регистрация</li>
            </ul>
        </div>
        <input name="user_type" type="text" class="avtorizaciya" placeholder="Admin - 1/ user - 0" value="<?php echo @$data['user_type']?>"><Br>
        <input name="FIO" type="text" class="avtorizaciya" placeholder="FIO" value="<?php echo @$data['FIO']?>"><Br>      
        <input name="login" type="text" class="avtorizaciya" placeholder="login" value="<?php echo @$data['login']?>"><Br>
        <input name="pass1" type="password" class="avtorizaciya" placeholder="password" value="<?php echo @$data['pass1']?>"><Br>	
        <input name="pass2" type="password" class="avtorizaciya" placeholder="password(again)"value="<?php echo @$data['pass2']?>"><Br>	 
        <input name="submit"type="submit" class="avtorizaciy" placeholder="Отправить">
        <div class="ssilku">
            <div class="ssilka"><a class="ssilka" href="oblozhka.php">На главную</a></div>
        </div>			
    </div>
</form>	
</body>
</html>