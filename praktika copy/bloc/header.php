<?php
session_start();
?>
<link rel="stylesheet" href="../css/header.css" >
<header class="h1">
    <!-- <a href=""><img src="img/book.png" alt=""></a>  -->
    <div class="boxA1"><div class="foto"></div></div>
    <div class="boxA2"><a href="hub.php">главное</a></div>
    <div class="boxA3">
    <?php
    if($_SESSION['user']['user']==1){echo'<a href="../DOBAV_BO.php">добавить </a>';}
    ?>
    </div>
    <div class="boxA4"></div>
    <div class="boxA5">должен быть поиск</div>
    <div class="boxA2"></div>
    <div class="boxA8">
        
        <?php
            if($_SESSION['user']['id']){
                echo'<a href="../menu.php">меню</a>';
                
            }
            else{
                echo'<a href="../vhod.php">вход</a>';
            }

            if($_SESSION['user']['avatar']!=null){
                
                echo'<img src="'. $_SESSION['user']['avatar'] .'" width="50" alt="" class="u">';
            }
            elseif($_SESSION['user']['id']){
                
                echo'<img src="../img/nall.png" width="50" alt="">';
            }
            
        ?>
    
        
 
    </div>
</header>