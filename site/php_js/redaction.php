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
    
<div id="back" class="Main">
    <div class="column1">
        <a href="oblozhka.php?id=-1" id="sl1" class="b">ProMenya</a>
    </div>
    <div class="column2">
        <a href="mainMenu.php?id=-2"id="sl2" class="ctr"> Главная </a>
        <a href="mlidm.php?id=-3" id="sl3" class="ctr"> Лабы по Млидм </a>
        <a href="gallery.php?id=-4" id="sl4" class="ctr">Галерея</a> 
        <a href="contacts.php?id=-5" id="sl5" class="ctr">Контакты</a> 
        <?php if(isset($_SESSION['logged_user'])): ?>
            <a href="redaction.php?id=-6" id="sl6" class="ctr"><?php echo $_SESSION['logged_user']->login;?></a>
        <?php else: ?>
            <a href="avtorizacia.php?id=-7" id="sl6" class="ctr">Вход</a>
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
        $user=R::load('users', $_SESSION['logged_user']->id);
        if(trim($data['user_avatar']) != ''){
            $user->file = $data['user_avatar'];
        }
        R::store($user);
   }

    if(isset($data['submit2'])){
        if( move_uploaded_file($_FILES['user_avatar']['tmp_name'], '/OpenServer/domains/ulstu/site/upload/'.$_FILES['user_avatar']['name'])){
            echo '<div style="color: red; font-size: 2rem;text-align: center; position: relative;">ура</div><hr>';
        }else{
            echo '<div style="color: red; font-size: 2rem;text-align: center; position: relative;">'.$_FILES['user_avatar']['name'].'</div><hr>';
        }

    }
?>

<?php if($_SESSION['logged_user']->type == 1): ?>
<div class=htr>Список пользователей</div>
<table class="list">
    <tr>
        <td>id</td>
        <td>Логин</td>
        <td>ФИО</td>
        <td>Тип пользователя</td>
        <td>Изображение</td>
        <td>Изменить</td>
    </tr>
<?php  

$user=R::find('users', "`id` > ?", array(0));
foreach ($user as $item){
    ?>
    <tr>
        <td><?=$item['id']?></td>
        <td><?=$item['login']?></td>
        <td><?=$item['fio']?></td>
        <td><?php  if ($item['type'] == 1) {echo 'admin';} else { echo 'user';} ?></td>
        <td><img src="/site/upload/<?=$item['file']?>"class="avatarimg" alt="Аватарка"></td>
        <td>
            <a href="/site/admin/edituser.php?id=<?=$item['id']?>">
                <img class="iconcs" src="/site/img/edit.png" title="Редактировать">
            </a>
            <a href="/site/admin/deleteuser.php?id=<?=$item['id']?>">
                <img class="iconcs" src="/site/img/delete.png" title="Удалить">
            </a>
        </td>
    </tr>

    <?php
}
?>
</table>
<div class="logout"><a class="ssilka" href="logout.php">Выход</a></div>

    <?php else: ?>
<div class=htr>Профиль: <?php echo $_SESSION['logged_user']->login;?></div>
<table class="list">
    <tr>
        <td width="60px">Логин</td>
        <td width="100px">ФИО</td>
        <td width="180px">Изображение</td>
    </tr>
<?php 
$user=R::find('users', "`id` > ?", array(0));
foreach ($user as $item){
    if ($item['login'] == $_SESSION['logged_user']->login){
        ?>
        <tr>
            <td><?=$item['login']?></td>
            <td><?=$item['fio']?></td>
            <td><img src="/site/upload/<?=$item['file']?>"class="avatarimg" alt="Аватарка"></td>
        </tr>
        <?php 
    }
} 
?>
</table>

    <div class="avtorizacia">

        <div class="verh">
            <ul class="spisok" >
                <li div class="slovo">Добавить аватарку</li>
            </ul>
        </div>
        
        <form action="redaction.php" method="post">
        <tr>
            <td>
            <div class = "htr">Загрузить в бд:<input type="file" name="user_avatar"  value="<?php echo @$data['user_avatar']?>"/></div>
            </td>
        </tr>
        <input name="submit"type="submit" class="avtorizaciy" placeholder="Изменить">		
        </form>	 

        <form action="redaction.php" method="post" enctype="multipart/form-data" >
        <tr>
            <td>
            <div class = "htr"> Отправить на сервер:<input type="file" name="user_avatar"  value="<?php echo @$data['user_avatar']?>"/></div>
            </td>
        </tr>
        <input name="submit2"type="submit" class="avtorizaciy" placeholder="Изменить" >		
        </form>	

    </div>
</form>	


<div class="logout"><a class="ssilka" href="logout.php">Выход</a></div>
<?php endif; ?> 

</body>
</html>