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
    <div class ="hj">

    <form action="core/BAvtor.php" method="post" enctype="multipart/form-data">
        
        <?php
        echo'<select name="avtor">';
        require 'core/conect.php';
        $qu=$pdo->query('SELECT * FROM `book_avtor`');
        while($row = $qu->fetch(PDO::FETCH_OBJ)){
        echo'<option>'.$row->name.'</option>';
        }
        echo'</select>';
        ?>
        <?php
        echo'<select name="book">';
        require 'core/conect.php';
        $qu=$pdo->query('SELECT * FROM `book_book`');
        while($row = $qu->fetch(PDO::FETCH_OBJ)){
        echo'<option>'.$row->name.'</option>';
        }
        echo'</select>';
        ?>
        
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