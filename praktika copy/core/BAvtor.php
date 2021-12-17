<?php
session_start();
require 'conect.php';

$avtor = $_POST['avtor'];
$book = $_POST['book'];
if($avtor != null&& $book!= null){
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$data = $pdo->prepare("INSERT INTO book_bofer(name_avtor,name_book) VALUES(:name_avtor, :name_book)");
$data->bindParam(":name_avtor", $avtor, PDO::PARAM_STR);
$data->bindParam(":name_book",$book,PDO::PARAM_STR);
$data->execute();

$_SESSION['message'] = 'всё ок';
header('Location: ../DOBAV_AA.php');
}
else{
    $_SESSION['message'] = 'не ок';
header('Location: ../DOBAV_AA.php');
}