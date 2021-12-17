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

<body >

    <?php require "bloc/header.php"?>
    <?php require "bloc/header2.php"?>
    <div class ="hk">

    <form action="core/avtor.php" method="post" enctype="multipart/form-data">

        <ladel>имя автора</ladel>
        <input type ="text" name="name" placeholder="">
        
        <button type ="submit">ЗАРЕГЕСТРИРОВАТЬСЯ</button>
        
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