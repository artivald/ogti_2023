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
<h2>Тарифы</h2>
<div style="color: white; margin-left: 10px; max-height: 500px; font-size: 15px;">
<p>Выберите подходящий тариф для вашей компании:</p>

<div class="tariff">
<h3>Стартовый</h3>
<ul>
<li>До 10 пользователей</li>
<li>2 GB хранилища</li>
<li>Базовый функционал</li>
<li>Поддержка по электронной почте</li>
</ul>
<p>Цена: 500 руб/мес</p>
</div>

<div class="tariff">
<h3>Стандартный</h3>
<ul>
<li>До 50 пользователей</li>
<li>5 GB хранилища</li> 
<li>Расширенный функционал</li>
<li>Круглосуточная техподдержка</li>
<li>Индивидуальные отчеты</li>
</ul>
<p>Цена: 1500 руб/мес</p>
</div>

<div class="tariff">
<h3>Профессиональный</h3>
<ul>
<li>До 100 пользователей</li>
<li>10 GB хранилища</li>
<li>Полный функционал</li> 
<li>Персональный менеджер</li>
<li>Интеграция с 1С</li>
<li>API для внешних систем</li>
</ul>
<p>Цена: 3000 руб/мес</p>
</div>

<div class="tariff">
<h3>Корпоративный</h3>
<ul>
<li>Безлимитное количество пользователей</li>
<li>Неограниченное хранилище</li> 
<li>Индивидуальная настройка системы</li>
<li>Выделенный сервер</li>
<li>Служба внедрения и обучения</li>
</ul>
<p>Цена: по запросу</p>
</div>

<p>Для всех тарифов предусмотрен бесплатный пробный период 14 дней.</p>

<p>Свяжитесь с нами для получения персонального предложения!</p>
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