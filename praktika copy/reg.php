<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/css1.css" >
    <title>Document</title>
</head>
<?php
 unset($_SESSION['user']);
?>
<body>

    <?php require "bloc/header.php"?>
    <div class ="hj">

    <form action="core/signup.php" method="post" enctype="multipart/form-data">

        <ladel>логин</ladel>
        <input type ="text" name="name" placeholder="введите логин">
        <ladel>E-mail</ladel>
        <input type ="email" name="email" placeholder="введите E-mail">
        <ladel>Картинка</ladel>
        <input type ="file" name="ava" class = "a1">
        <ladel>пароль </ladel>    
        <input type ="password" name="password"placeholder="введите свой пароль">
        <ladel>повторить пароль</ladel>
        <input type ="password" name="password_confirm" placeholder="повторите пароль">
        <button type ="submit">ЗАРЕГЕСТРИРОВАТЬСЯ</button>
        <p>Вы уже зарегестрированы?<a href ="vhod.php">войти</a></p>
        
            <?php// отображения ошибак
                if($_SESSION['message']){
                    echo'<p class="ohpk"></p>'.$_SESSION['message'].'</p>';
                }
                
                unset($_SESSION['message']);
            ?>
    </form>
    </div>
</body>
</html>