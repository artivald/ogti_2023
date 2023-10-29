<?php 
session_start();
include_once("phhp.php");
if ($_GET['action'] == 'out')
    {unset($_SESSION['idUser']);}
?>
<!doctype html>
<html lang="ru"> 
 <head> 
  <meta charset="UTF-8"> 
  <title>ПрофТестиум</title> 
  <link rel="stylesheet" href="./styleMain.css"> 
 </head> 
 <body> <!-- partial:index.partial.html --> 
  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 
   <div class="signin"> 
    <div class="content"> 
    <table class="table">

        <tr class="table-top">
            <td>
                <div class="headerRab"><a href="index.php"><img src="logo.png" width="10%" alt="Логотип"></a></div>
            </td>
            <?php 
                   If (isset($_SESSION['idUser']))
                   {
                    echo "<td align=\"right\">
                <a href=\"rab.php\" style=\"color:#00ff00; text-decoration:none; font-size:16px; font-family:Arial;\">Профиль</a>
                    </td>";
                   }
                   else
                   {
                            echo    "<td align=\"right\">
                     <a href=\"auto.php\" style=\"color:#00ff00; text-decoration:none; font-size:16px; font-family:Arial;\">Авторизация/</a>
                         </td>
                          <td align=\"left\">
                      <a href=\"reg.php\" style=\"color:#00ff00; text-decoration:none; font-size:16px; font-family:Arial;\">Регистрация</a>
                         </td>";
                        }
             ?>

        </tr>
        <tr class="table-tr">
            <td valign="top">
<h2>Поддержка</h2>
<div style="color: white; margin-left: 20px; max-height: 500px; font-size: 25px;">

  <p>
    Мы стремимся сделать использование нашей платформы максимально простым и удобным. Но если у вас возникли вопросы, вы всегда можете обратиться в службу поддержки:
  </p>

  <ul>
    <li>По телефону +7 800 555 35 35 (бесплатный звонок по России)</li>
    <li>По электронной почте support@company.ru</li> 
    <li>С помощью онлайн-чата на сайте (в правом нижнем углу)</li>
    <li>Через форму обратной связи на сайте</li>
    <li>В разделе "Вопрос - Ответ" на сайте</li>
  </ul>

  <p>
    Мы обрабатываем все запросы в рабочее время с 10 до 19 по московскому времени. Время ответа:
  </p>

  <ul>
    <li>По телефону - моментально</li>
    <li>По электронной почте и чату - до 2 часов</li>
    <li>Через форму на сайте - до 24 часов</li>
  </ul>

  <p>
    Также на нашем сайте вы найдете:
  </p>

  <ul>
    <li>Раздел с ответами на часто задаваемые вопросы</li>
    <li>Базу знаний с инструкциями и руководствами</li>
    <li>Форму для отправки пожеланий и отзывов</li>
  </ul>

  <p>
    Служба поддержки всегда готова вам помочь - свяжитесь с нами удобным для вас способом!
  </p>
</div>
            </td>
        </tr>
    </table>
     <div class="form"> 
     </div> 
    </div> 
   </div> 
  </section> <!-- partial --> 
 </body>
</html>