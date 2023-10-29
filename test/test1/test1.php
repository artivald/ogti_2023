<?php 
session_start(); 
if ($_SESSION['idUser'] !== null) {
    include_once("../../phhp.php");
    $filename = "../../rep.txt";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Тест</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="test">
        <h1>Техника безопасности</h1>
        <form action="" method="post">
            <h3>Вопрос 1</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v1" value="1"><label>Ответ 1</label></br>
                <input type="radio" name="v1" value="2"><label>Ответ 2</label></br>
                <input type="radio" name="v1" value="3"><label>Ответ 3</label></br>
                <input type="radio" name="v1" value="4"><label>Ответ 3</label></br>

            </div>
            </br>

            <h3>Вопрос 2</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v2" value="1"><label>Ответ 1</label></br>
                <input type="radio" name="v2" value="2"><label>Ответ 2</label></br>
                <input type="radio" name="v2" value="3"><label>Ответ 3</label></br>
                <input type="radio" name="v2" value="3"><label>Ответ 3</label></br>
            </div>
            </br>

            <h3>Вопрос 3</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v3" value="1"><label>Ответ 1</label></br>
                <input type="radio" name="v3" value="2"><label>Ответ 2</label></br>
                <input type="radio" name="v3" value="3"><label>Ответ 3</label></br>
                <input type="radio" name="v3" value="4"><label>Ответ 3</label></br>
            </div>
            </br>

            <h3>Вопрос 4</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v4" value="1"><label>Ответ 1</label></br>
                <input type="radio" name="v4" value="2"><label>Ответ 2</label></br>
                <input type="radio" name="v4" value="3"><label>Ответ 3</label></br>
                <input type="radio" name="v4" value="4"><label>Ответ 3</label></br>
            </div>
            </br>

            <h3>Вопрос 5</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v5" value="1"><label>Ответ 1</label></br>
                <input type="radio" name="v5" value="2"><label>Ответ 2</label></br>
                <input type="radio" name="v5" value="3"><label>Ответ 3</label></br>
                <input type="radio" name="v5" value="4"><label>Ответ 3</label></br>
            </div>
            </br>

            <h3>Вопрос 6</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v6" value="1"><label>Ответ 1</label></br>
                <input type="radio" name="v6" value="2"><label>Ответ 2</label></br>
                <input type="radio" name="v6" value="3"><label>Ответ 3</label></br>
                <input type="radio" name="v6" value="4"><label>Ответ 3</label></br>
            </div>
            </br>
             <h3>Вопрос 7</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v7" value="1"><label>Ответ 1</label></br>
                <input type="radio" name="v7" value="2"><label>Ответ 2</label></br>
                <input type="radio" name="v7" value="3"><label>Ответ 3</label></br>
                <input type="radio" name="v7" value="4"><label>Ответ 3</label></br>
            </div>
            </br>
             <h3>Вопрос 8</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v8" value="1"><label>Ответ 1</label></br>
                <input type="radio" name="v8" value="2"><label>Ответ 2</label></br>
                <input type="radio" name="v8" value="3"><label>Ответ 3</label></br>
                <input type="radio" name="v8" value="4"><label>Ответ 3</label></br>
            </div>
            </br>
             <h3>Вопрос 9</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v9" value="1"><label>Ответ 1</label></br>
                <input type="radio" name="v9" value="2"><label>Ответ 2</label></br>
                <input type="radio" name="v9" value="3"><label>Ответ 3</label></br>
                <input type="radio" name="v9" value="4"><label>Ответ 3</label></br>
            </div>
            </br>
             <h3>Вопрос 10</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v10" value="1"><label>Ответ 1</label></br>
                <input type="radio" name="v10" value="2"><label>Ответ 2</label></br>
                <input type="radio" name="v10" value="3"><label>Ответ 3</label></br>
                <input type="radio" name="v10" value="4"><label>Ответ 3</label></br>
            </div>
            </br>
            <div class="submit">
                <input type="submit" name="otv" value="Ответить">
            </div>

        </form>

        <?php 
        if(isset($_POST['otv'])) {
            $result = 0;
            if(isset($_POST['v1'])) {
                if($_POST['v1'] == '1') {
                    $result++;
                }
            }
            if(isset($_POST['v2'])) {
                if($_POST['v2'] == '2') {
                    $result++;
                }
            }
            if(isset($_POST['v3'])) {
                if($_POST['v3'] == '3') {
                    $result++;
                }
            }
            if(isset($_POST['v4'])) {
                if($_POST['v4'] == '4') {
                    $result++;
                }
            }
            if(isset($_POST['v5'])) 
            {
                if($_POST['v5'] == '2') 
                {
                    $result++;
                }
            }
            if(isset($_POST['v6'])) 
            {
                if($_POST['v6'] == '2')
                 {
                    $result++;
                }
            }
            if(isset($_POST['v7']))
             {
                if($_POST['v7'] == '2')
                 {
                    $result++;
                }
            }
             if(isset($_POST['v8']))
              {
                if($_POST['v8'] == '1')
                 {
                    $result++;
                }
            }
                         
            if(isset($_POST['v9']))
              {
                if($_POST['v9'] == '3')
                 {
                    $result++;
                }
            }

             if(isset($_POST['v10']))
              {
                if($_POST['v10'] == '1')
                 {
                    $result++;
                }
            }


            echo "<div class=\"rez\"><p>Ответов: $result</p></div>";
            $data = $_SESSION['idUser'].'#'."Техника безопасности".'#'.$result."\n";
            file_put_contents($filename, $data, FILE_APPEND) ;
            $result = 0 ; 
        }
        ?>

    </div>
</body>
</html>

<?php

}
?>