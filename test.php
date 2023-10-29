<?php 
include_once("phhp.php") ;
$filename = 'users.txt' ;
$data = $_POST['username'].'#'.$_POST['login'].'#'.$_POST['password']."\n";
file_put_contents($filename, $data, FILE_APPEND) ;
?>
<!DOCTYPE html>
<html lang="ru">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Название страницы</title>
  <link href="style.css" rel="stylesheet">
 </head>
 <body>
  <a href="test\test1\test1.php">Техника безопасности</a>
 </body>
</html>
