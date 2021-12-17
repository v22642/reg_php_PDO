<?php
session_start();
require 'conect.php';
$lagin = $_POST['name'];
$password = $_POST['password'];
$password=md5($password);

$check_user = $pdo -> query("SELECT * FROM `reg` WHERE `lagin`='$lagin' AND `password`='$password'");
$user = $check_user->fetch(PDO::FETCH_ASSOC);
if($user != null){
    $_SESSION['user']=[
        "id"=>$user['id'],
        "lagin" => $user['lagin'],
        "avatar" =>$user['avatar'],
        "user" =>$user['user']
    ];
    header('Location: ../hub.php');
}
else{
    $_SESSION['message'] = 'нет такой учётки';
     header('Location: ../vhod.php');
}