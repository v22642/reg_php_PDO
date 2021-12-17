<link rel="stylesheet" href="css/content1.css" >
<div class="body">
<?php
        
        require 'core/conect.php';
        $x=1;
        $qu=$pdo->query('SELECT * FROM `book_book`');
        while($row = $qu->fetch(PDO::FETCH_OBJ)){
            echo'<div class = "Sbox">';
            echo'<div class = "Ibox">'.$row->name.'</div>';

            echo'</div>';
        }
        
?>
</div>