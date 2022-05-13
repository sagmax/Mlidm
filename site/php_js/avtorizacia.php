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
<body id="body" class=6>
    
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
    <div id="avtorizacia" class="avtorizacia">	
        <div class="verh">
            <ul class="spisok" >
                <li id="slovo" div class="slovo">Авторизация</li>
            </ul>
        </div>            
        <input id="login" name="login" type="text" class="avtorizaciya" placeholder="login" value="<?php echo @$data['login']?>"><Br>
        <input id="pass1" name="pass1" type="password" class="avtorizaciya" placeholder="password"><Br>	
        <input id="submit" name="submit"type="submit" class="avtorizaciy" placeholder="Отправить">
        <div class="ssilku">
            <div id="ssilka1" class="ssilka"><a class="ssilka"  href="registracia.php">Зарегистрироваться</a><br></div>
            <div id="ssilka2" class="ssilka"><a class="ssilka" href="oblozhka.php">На главную</a></div>
        </div>			
    </div>
</form>
</body>
<script src="event.js"></script>
</html>