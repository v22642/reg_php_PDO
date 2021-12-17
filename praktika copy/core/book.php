<?php
session_start();
require 'conect.php';

$name = $_POST['name'];
$release_date = $_POST['release_date'];
$description = $_POST['description'];
$avaBook = $_FILES['avaBook'];
if($name != null && $release_date != null && $description != null && $avaBook != null){
    $path = '../imgBook/'.time().$_FILES['avaBook']['name'];
    move_uploaded_file($_FILES['avaBook']['tmp_name'], $path);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = $pdo->prepare("INSERT INTO book_book(name, description , release_date, avaBook) VALUES(:name, :description, :release_date, :avaBook)");
    $data->bindParam(":name", $name, PDO::PARAM_STR);
    $data->bindParam(":description",$description,PDO::PARAM_STR);
    $data->bindParam(":release_date",$release_date,PDO::PARAM_STR);
    $data->bindParam(":avaBook",$path,PDO::PARAM_STR);

    $data->execute();

    $_SESSION['message'] = 'книга добавлина';
    header('Location: ../DOBAV_BO.php');
}
else{
    
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../DOBAV_BO.php');
    
}
