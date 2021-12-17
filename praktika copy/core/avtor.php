<?php
session_start();
require 'conect.php';

$na = $_POST['name'];
$nn=$na;

if($na != null){
    $c = $pdo -> query("SELECT * FROM `book_avtor` WHERE `name`='$nn'");
    $n = $c->fetch(PDO::FETCH_ASSOC);
    if(empty($n)){
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = $pdo->prepare("INSERT INTO book_avtor(name) VALUES (:na)");
    $data->bindParam(":na", $na, PDO::PARAM_STR);

    $data->execute();

    $_SESSION['message'] = 'автор добавлин';
    header('Location: ../DOBAV_A.php');
    }else{
        $_SESSION['message'] = 'автор уже есть';
        header('Location: ../DOBAV_A.php');
    }
}
else{
    
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../DOBAV_A.php');
    
}