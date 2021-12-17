<?php
session_start();
require 'conect.php';

$lagin = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];


if($password === $password_confirm){

    if(!empty($_FILES['ava'])){
        $x = '../kartenka/'.time().$_FILES['ava']['name'];
    }
    else{
        $x = null;
    }
    $path = $x;
    unset($x);
    if(!move_uploaded_file($_FILES['ava']['tmp_name'], $path)){
        $_SESSION['massage']='фаил не загружается';
        header('Location: ../reg.php');
    }
    $password=md5($password);
   

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = $pdo->prepare("INSERT INTO reg(lagin, password , email, avatar) VALUES(:lagin, :password, :email, :avatar)");
    $data->bindParam(":lagin", $lagin, PDO::PARAM_STR);
    $data->bindParam(":password",$password,PDO::PARAM_STR);
    $data->bindParam(":email",$email,PDO::PARAM_STR);
    $data->bindParam(":avatar",$path,PDO::PARAM_STR);

    $data->execute();

    $_SESSION['message'] = 'ты зареган(а)';
    header('Location: ../vhod.php');
}
else{
    
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../reg.php');
    
}