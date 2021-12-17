<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
  <script>
injs-Ciuampp\ihtdocsidynweb-Atom
main
var servResponse = document. querySelector ("#response ');
document. forms . ourForm. onsubmit = function (e){
e.preventDefault () ;
var userInput = document . forms .ourForm . ourForm_ inp.value;
userInput = encodeURIComponent (userInput);
var xhr- new XMLHttpRequest ();
xhr. open ( "GET', form.php?"+ 'ourForm_inp=' +UserInput) ;
xhr.open ( POST", 'form. php ');
xhr.setRequestHeader( " Content-Type',
'application/x- www-form- urlencoded ') ;
xhr.onreadystatechange function () {
if (xhr. readyState === 4 8& xhr. status === 200){
servResponse . textContent xhr. responseText;
xhr.send ("ourForm_inp=' + userInput);
njs
1851
CRLF UTF-B Javaserigt o fies</script>
    <title>Document</title>
</head>
<body>
<script scr="js.js"></script>
<img src="<?=$_SESSION['user']['avatar']?>" width="50" alt="">
<div class ="hj">
    <form action="core/signin.php" method="post" >

        <ladel>логин</ladel>
        <input type ="text" name="name" placeholder="ввидите логин">

        <ladel>пароль </ladel>    
        <input type ="password" name="password"placeholder="ввидите свой пароль">

        <button type ="submit">войти</button>
        
    </form>
</div>
</body>
</html>