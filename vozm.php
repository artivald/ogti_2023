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
<h2>Возможности</h2>
<div style="color: white; margin-left: 20px; max-height: 500px; font-size: 25px;">
<p>Наша платформа для обучения и тестирования персонала позволяет:</p>

<ul>
<li>Создать персональный портал для обучения сотрудников вашей компании</li>
<li>Загрузить учебные материалы в разных форматах (текст, видео, презентации)</li>  
<li>Сформировать индивидуальные учебные планы для разных категорий сотрудников</li>
<li>Проводить тестирование знаний онлайн с автоматической проверкой результатов</li>
<li>Отслеживать прогресс каждого сотрудника в обучении</li>
<li>Использовать VR-инструменты для обучения практическим навыкам</li>
<li>Получать аналитику и формировать отчеты по обучению персонала</li>
<li>Мотивировать сотрудников с помощью геймификации и рейтингов</li>
<li>Оптимизировать бюджет на обучение за счет онлайн-инструментов</li>
<li>Повысить квалификацию персонала и улучшить показатели компании</li>  
</ul>

<p>Начните использовать нашу платформу уже сегодня и выведите обучение персонала на новый уровень!</p>
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