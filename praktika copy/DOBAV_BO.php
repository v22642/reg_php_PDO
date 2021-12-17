<?php
session_start();
require 'core/BAvtor.php';

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
    <div class ="hj">

    <form action="core/book.php" method="post" enctype="multipart/form-data">

        <ladel>название книги</ladel>
        <input type ="text" name="name" placeholder="">
        <ladel>датъ выпуска</ladel>
        <input type ="text" name="release_date" placeholder="">
        <ladel>описания</ladel>
        <textarea class ="text" name="description"></textarea>
        <ladel>Картинка</ladel>
        <input type ="file" name="avaBook" class = "a1">
        
        
        
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