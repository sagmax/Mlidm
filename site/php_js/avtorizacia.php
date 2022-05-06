<!DOCTYPE html>
<html lang="en">

<?php
    require 'db.php';
    ?>

<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="/site/css/avtorizacia.css">
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

<?php
    $data = $_POST;
    if(isset($data['submit'])){
        $errors = array();
        $user = R::findOne('users', 'login = ?', array($data['login']));
        if ( $user ){
            if( password_verify($data['pass1'], $user->password)){
                $_SESSION['logged_user'] = $user;
                header('location: /site/php_js/oblozhka.php');
            }else{
                $errors[] = 'Неверный пароль!';
            }
        }else{
            $errors[] = 'Такого пользователя не существует!';
        }
        if ( ! empty($errors)){
            echo '<div style="color: red; font-size: 2rem;text-align: center; position: relative;">'.array_shift($errors).'</div><hr>';
        }
    }?>

<form action="avtorizacia.php" method="post">
    <div class="avtorizacia">	
        <div class="verh">
            <ul class="spisok" >
                <li div class="slovo">Авторизация</li>
            </ul>
        </div>            
        <input name="login" type="text" class="avtorizaciya" placeholder="login" value="<?php echo @$data['login']?>"><Br>
        <input name="pass1" type="password" class="avtorizaciya" placeholder="password"><Br>	
        <input name="submit"type="submit" class="avtorizaciy" placeholder="Отправить">
        <div class="ssilku">
            <div class="ssilka"><a class="ssilka"  href="registracia.php">Зарегистрироваться</a><br></div>
            <div class="ssilka"><a class="ssilka" href="oblozhka.php">На главную</a></div>
        </div>			
    </div>
</form>
</body>
</html>