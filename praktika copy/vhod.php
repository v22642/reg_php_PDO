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
<body>
<?php require "bloc/header.php"?>
<img src="<?=$_SESSION['user']['avatar']?>" width="50" alt="">
<div class ="hj">
    <form action="core/signin.php" method="post" >

        <ladel>логин</ladel>
        <input type ="text" name="name" placeholder="ввидите логин">

        <ladel>пароль </ladel>    
        <input type ="password" name="password"placeholder="ввидите свой пароль">

        <button type ="submit">войти</button>
        <p>Вы не зарегестрированы?<a href ="reg.php">зарегестрированы</a></p>
        <?php
                if($_SESSION['message']){
                    echo'<p class="ohpk"></p>'.$_SESSION['message'].'</p>';
                }
                
                unset($_SESSION['message']);
            ?>
    </form>
</div>
</body>
</html>