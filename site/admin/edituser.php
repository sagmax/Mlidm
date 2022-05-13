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
<script src="/site/php_js/matrix.js"></script>

<?php
    $data = $_POST;
    if(isset($data['submit'])){
        $user=R::load('users', $_GET["id"]);
        if(trim($data['user_type']) != ''){
            $user->type = $data['user_type'];
        }
        if(trim($data['FIO']) != ''){
            $user->fio = $data['FIO'];
        }
        if(trim($data['login']) != ''){
            $user->login = $data['login'];
        }
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

</table>
    <div class="avtorizacia">
        <div class="verh">
            <ul class="spisok" >
                <li div >Редактировать пользователя:<?php echo $_GET["id"];?></li>
            </ul>
        </div>
        <form action="edituser.php?id=<?=$_GET["id"]?>" method="post">
        <input name="user_type" type="text" class="avtorizaciya" placeholder="Admin - 1/ user - 0" value="<?php echo @$data['user_type']?>"><Br>
        <input name="FIO" type="text" class="avtorizaciya" placeholder="FIO" value="<?php echo @$data['FIO']?>"><Br>    
        <input name="login" type="text" class="avtorizaciya" placeholder="login" value="<?php echo @$data['login']?>"><Br>
        <tr>
            <td>
            <div class = "htr">Загрузить в бд:<input type="file" name="user_avatar"  value="<?php echo @$data['user_avatar']?>"/></div>
            </td>
        </tr> 
        <input name="submit"type="submit" class="avtorizaciy" placeholder="Изменить">		
        </form>	 

        <form action="edituser.php?id=<?=$_GET["id"]?>" method="post" enctype="multipart/form-data" >
        <tr>
            <td>
            <div class = "htr"> Отправить на сервер:<input type="file" name="user_avatar"  value="<?php echo @$data['user_avatar']?>"/></div>
            </td>
        </tr>
        <input name="submit2"type="submit" class="avtorizaciy" placeholder="Изменить" >		
        </form>	

    </div>
</form>	

<div class="logout"><a class="ssilka" href="/site/php_js/logout.php">Выход</a></div>

</body>
</html>