<?php 
session_start();
$filename = "otz.txt";
$data = file($filename);
include_once("phhp.php");
if ($_POST['go_otzv'])
{
     $users_file = 'users.txt';
    $users = file($users_file);
    foreach ($users as $user) 
    {
        $row = explode("#", $user);
     if (trim($row[0]) == $_SESSION['idUser']) 
        {
            $name=  trim($row[2]);
            $lastname=  trim($row[1]);
        }
    }
$newdata = $name.'#'.$lastname.'#'.$_POST['otzvi']."\n";
file_put_contents($filename, $newdata, FILE_APPEND) ;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы</title>
    <link href="styleMain.css" rel="stylesheet">
</head>
<body>
<style type="text/css">
    p{
        color:#FFFFFF;
        font-size: 16px;
    }
    a{
        color: #ffffff;
      font-size: 20px;
    }
    .otzTxt
    {
        height: 100px;
        width: 500px;
        background-color:#808080;
    }
    .newOtz
    {
        bottom:50px;
        position: absolute;
    }
</style>
  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

    <div class="signin">
    <div class="content">
    <div class="headerRab"><a href="index.php"><img src="logo.png" width="10%" alt="Логотип"></a></div>
    <div style="max-height: 500px; height: 500px;">
    <div class="form" style="max-height: 450px;">
    <?php 
        foreach ($data as $row)
        {
            $row = explode("#", $row);
            echo "<div class=\"otzTxt\">
            <p>Пользователель: $row[0] $row[1]<br>
            <hr>
            <p>Текст отзыва: $row[2]</p>
            </div>";
        }
        echo "</div></div>";
        if($_SESSION['idUser'] != null)
        {
            echo "<div class=\"newOtz\">
                <form method=\"POST\">
                    <p>Текст отзыва:<br> <input name=\"otzvi\" type=\"text\" style=\"width: 600px; height: 100px;\"></p><br>
                    <input type=\"submit\" name=\"go_otzv\" value=\"Оставить отзыв\" style=\"font-size:18px padding-top: 0;\">
                </form>
            </div>";
        }
        else
        {
            echo "<div class=\"newOtz\">
                <p>Для того что бы оставить отзыв необходимо <a href=\"auto.php\">авторизоваться<a></p>
            </div>";
        }
     ?>
    </div>
</div>
</body>
</html>