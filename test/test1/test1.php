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
    <link rel="stylesheet" href="../../styleMain.css">
</head>
<style type="text/css">
    p{color: #ffffff;}
    html{
        color: #ffffff;
    }
.logoTest
{
     position: absolute;
  top: 50px;
  left: 100px;
}
a{
  color:#ffffff;
  font-size:35px ;
}
</style>
<body> 
    <div class="logoTest">
    <a href="../../index.php"><img src="../../logo.png" width="80%" alt="Логотип"></a><br>
    <a href="../../test.php">Назад</a>
    </div>
    <div class="test">
        <h1>Техника безопасности</h1>
        <form action="" method="post">
           <h3>На работах с повышенной опасностью работники проходят обучение и проверку знаний по вопросам охраны труда</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v1" value="1"><label>До начала выполнения должностных обязанностей и в дальнейшем один раз в год</label></br>
                <input type="radio" name="v1" value="2"><label>Периодически раз в 3 года</label></br>
                <input type="radio" name="v1" value="3"><label>Периодически раз в 5 лет</label></br>
                <input type="radio" name="v1" value="4"><label>По указанию администрации</label></br>

            </div>
            </br>

            <h3>Вводный инструктаж по охране труда с вновь принятыми работниками проводит</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v2" value="1"><label>Сотрудник отдела кадров</label></br>
                <input type="radio" name="v2" value="2"><label>Специалист по охране труда</label></br>
                <input type="radio" name="v2" value="3"><label>Непосредственный руководитель</label></br>
                <input type="radio" name="v2" value="3"><label>Председатель профкома</label></br>
            </div>
            </br>

            <h3>Повторный инструктаж по охране труда на работах без повышенной опасности проводится один раз</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v3" value="1"><label>В месяц</label></br>
                <input type="radio" name="v3" value="2"><label>На квартал</label></br>
                <input type="radio" name="v3" value="3"><label>В полугодие</label></br>
                <input type="radio" name="v3" value="4"><label>По указанию государственного инспектора</label></br>
            </div>
            </br>

            <h3>Инструктаж студентов по охране труда при проведении лабораторных работ проводит</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v4" value="1"><label>Преподаватель</label></br>
                <input type="radio" name="v4" value="2"><label>Инженер по охране труда</label></br>
                <input type="radio" name="v4" value="3"><label>Ст. лаборант</label></br>
                <input type="radio" name="v4" value="4"><label>Куратор</label></br>
            </div>
            </br>

            <h3>Когда проводится целевой инструктаж по охране труда?</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v5" value="1"><label>При изменении технологии или после несчастного случая</label></br>
                <input type="radio" name="v5" value="2"><label>При пeреводе работника из одного цеха в другой</label></br>
                <input type="radio" name="v5" value="3"><label>После выхода из перерыва</label></br>
                <input type="radio" name="v5" value="4"><label>При направлении на выполнение разовой или временной работы</label></br>
            </div>
            </br>

            <h3>Кто может отменить предписание специалиста по охране труда?</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v6" value="1"><label>Профсоюзный комитет</label></br>
                <input type="radio" name="v6" value="2"><label>Руководитель предприятия</label></br>
                <input type="radio" name="v6" value="3"><label>Суд</label></br>
                <input type="radio" name="v6" value="4"><label>Прокуратура</label></br>
            </div>
            </br>
             <h3>Кем осуществляется расследование несчастных случаев на производстве?</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v7" value="1"><label>Отделом охраны труда</label></br>
                <input type="radio" name="v7" value="2"><label>Комиссией, назначенной руководителем предприятия</label></br>
                <input type="radio" name="v7" value="3"><label>Профсоюзным комитетом</label></br>
                <input type="radio" name="v7" value="4"><label>Отделом внутренних дел</label></br>
            </div>
            </br>
             <h3>После какого срока комиссия должна составить акт о несчастном случае на производстве по форме Н-1?</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v8" value="1"><label>После окончания расследования</label></br>
                <input type="radio" name="v8" value="2"><label>Одни сутки</label></br>
                <input type="radio" name="v8" value="3"><label>О пределяет руководитель</label></br>
                <input type="radio" name="v8" value="4"><label>Трое суток</label></br>
            </div>
            </br>
             <h3>Расследуется несчастный случай, о котором пострадавший своевременно не сообщил?</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v9" value="1"><label>В случае смерти потерпевшего</label></br>
                <input type="radio" name="v9" value="2"><label>Расследуется, если с момента происшествия прошло не более одного месяца</label></br>
                <input type="radio" name="v9" value="3"><label>Расследуется по заявлению потерпевшего</label></br>
                <input type="radio" name="v9" value="4"><label>не расследуется</label></br>
            </div>
            </br>
             <h3>В каком размере предприятие платит штраф в случае установления попытки сокрытия работодателем несчастного случая?</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v10" value="1"><label>В 10-кратном размере</label></br>
                <input type="radio" name="v10" value="2"><label>В 5-кратном размере</label></br>
                <input type="radio" name="v10" value="3"><label>В 20-кратном размере</label></br>
                <input type="radio" name="v10" value="4"><label>В 15-кратном размере</label></br>
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
            $data = $_SESSION['idUser'].'#'.$_SESSION['login_'].'#'."Техника безопасности".'#'.$result."\n";
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