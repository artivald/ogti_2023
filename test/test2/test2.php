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
           <h3>Какие методы обеспечивают безопасность при работе со станками на ЧПУ?</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v1" value="1"><label>Установка защитных ограждений</label></br>
                <input type="radio" name="v1" value="2"><label>Использование средств индивидуальной защиты</label></br>
                <input type="radio" name="v1" value="3"><label>Соблюдение правил эксплуатации и обслуживания станка</label></br>
                <input type="radio" name="v1" value="4"><label>Всё время держать палец на выключателе</label></br>

            </div>
            </br>

            <h3>Какие методы обеспечивают безопасность при работе со станками на ЧПУ?</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v1" value="1"><label>Установка защитных ограждений</label></br>
                <input type="radio" name="v1" value="2"><label>Использование средств индивидуальной защиты</label></br>
                <input type="radio" name="v1" value="3"><label>Соблюдение правил эксплуатации и обслуживания станка</label></br>
                <input type="radio" name="v1" value="4"><label>Всё время держать палец на выключателе</label></br>

            </div>
            </br>

            <h3>Какие методы обеспечивают безопасность при работе со станками на ЧПУ?</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v1" value="1"><label>Установка защитных ограждений</label></br>
                <input type="radio" name="v1" value="2"><label>Использование средств индивидуальной защиты</label></br>
                <input type="radio" name="v1" value="3"><label>Соблюдение правил эксплуатации и обслуживания станка</label></br>
                <input type="radio" name="v1" value="4"><label>Всё время держать палец на выключателе</label></br>

            </div>
            </br>

            <h3>Что такое "зона безопасности" при работе со станками на ЧПУ?</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v2" value="1"><label>Зона, где работник осуществляет программирование станка</label></br>
                <input type="radio" name="v2" value="2"><label>Зона, где устанавливаются защитные ограждения</label></br>
                <input type="radio" name="v2" value="3"><label>Зона, куда необходимо ограничить доступ для безопасности работников</label></br>
                <input type="radio" name="v2" value="4"><label>Зона, где хранятся инструменты и материалы</label></br>
            </div>
            </br>

            <h3>Какие меры безопасности необходимо принять перед началом работы со станком на ЧПУ?</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v3" value="1"><label>Проверить работоспособность защитных ограждений и установить их на место</label></br>
                <input type="radio" name="v3" value="2"><label>Отключить электропитание станка перед проведением ремонтных работ</label></br>
                <input type="radio" name="v3" value="3"><label>Отрегулировать настройки программного обеспечения станка</label></br>
                <input type="radio" name="v3" value="4"><label>Полностью завершить работу по программированию станка</label></br>
            </div>
            </br>

            <h3>Какие правила обязательны при работе с оборудованием на ЧПУ?</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v4" value="1"><label>Необходимо использовать сигнальные бирки для предупреждения о возможной опасности</label></br>
                <input type="radio" name="v4" value="2"><label>Положение рукояток и кнопок управления должно быть удобным и доступным для оператора</label></br>
                <input type="radio" name="v4" value="3"><label>Работники должны быть обучены безопасным методам работы с оборудованием</label></br>
                <input type="radio" name="v4" value="4"><label>Всегда необходимо работать в одиночку для предотвращения возникновения непредвиденных ситуаций</label></br>
            </div>
            </br>

            <h3>Как следует управлять станком на ЧПУ?</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v5" value="1"><label>Использовать только документированные программы работы</label></br>
                <input type="radio" name="v5" value="2"><label>Отключать станок безопасным образом после каждой работы</label></br>
                <input type="radio" name="v5" value="3"><label>Следить за работой станка на протяжении всего процесса</label></br>
                <input type="radio" name="v5" value="4"><label>Всегда работать в ручном режиме для более точного управления</label></br>
            </div>
            </br>

            <h3>Какая одежда является обязательной при работе со станками на ЧПУ?</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v6" value="1"><label>Защитный халат и сапоги</label></br>
                <input type="radio" name="v6" value="2"><label>Защитные очки и перчатки</label></br>
                <input type="radio" name="v6" value="3"><label>Шлем и антишумные наушники</label></br>
                <input type="radio" name="v6" value="4"><label>Защитный комбинезон и рабочие ботинки</label></br>
            </div>
            </br>
             <h3>Что делать в случае возникновения неисправности станка на ЧПУ?</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v7" value="1"><label>Продолжить работу и проигнорировать неисправность</label></br>
                <input type="radio" name="v7" value="2"><label>Самостоятельно пытаться устранить неисправность</label></br>
                <input type="radio" name="v7" value="3"><label>Немедленно выключить станок и сообщить своему начальнику</label></br>
                <input type="radio" name="v7" value="4"><label>Попытаться внести изменения в программное обеспечение для исправления неисправности</label></br>
            </div>
            </br>
             <h3>Какие действия предпринять перед проведением технического обслуживания станка на ЧПУ?</h3>
            <p>Варианты ответов:</p>
            <div class="variant">
                <input type="radio" name="v8" value="1"><label>Выполнить полную остановку станка и оборудования</label></br>
                <input type="radio" name="v8" value="2"><label>Уведомить своего начальника о необходимости обслуживания</label></br>
                <input type="radio" name="v8" value="3"><label>Установить защитные ограждения и использовать средства индивидуальной защиты</label></br>
                <input type="radio" name="v8" value="4"><label>Продолжить работу, минимизируя время простоя</label></br>
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
                if($_POST['v4'] == '3') {
                    $result++;
                }
            }
            if(isset($_POST['v5'])) 
            {
                if($_POST['v5'] == '1') 
                {
                    $result++;
                }
            }
            if(isset($_POST['v6'])) 
            {
                if($_POST['v6'] == '3')
                 {
                    $result++;
                }
            }
            if(isset($_POST['v7']))
             {
                if($_POST['v7'] == '3')
                 {
                    $result++;
                }
            }
             if(isset($_POST['v8']))
              {
                if($_POST['v8'] == '2')
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
                if($_POST['v10'] == '4')
                 {
                    $result++;
                }
            }
            echo "<div class=\"rez\"><p>Ответов: $result</p></div>";
            $data = $_SESSION['idUser'].'#'.$_SESSION['login_'].'#'."Техника безопасности при работе со станками на ЧПУ".'#'.$result."10"."\n";
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