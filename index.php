<?php 
session_start();
include_once("phhp.php");
if ($_GET['action'] == 'out')
    {unset($_SESSION['idUser']);}
?>
<!doctype html>
<html lang="en"> 
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
                <img src="logo.png" width="10%" alt="Логотип">
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
            <td>
                <a href="null" style="color:#00ff00; text-decoration:none; font-size:16px; font-family:Arial;">Возможности</a>
            </td>
            <td rowspan="4" valign="top" style="color:#ffffff;">
                <div>
                    <!--Текст про сайт-->
                </div>
            </td>
        </tr>
        <tr class="table-tr">
            <td>
                <a href="null" style="color:#00ff00; text-decoration:none; font-size:16px; font-family:Arial;">Тарифы</a>
            </td>
        </tr>
        <tr class="table-tr">
            <td>
                <a href="null" style="color:#00ff00; text-decoration:none; font-size:16px; font-family:Arial;">Отзывы</a>
            </td>
        </tr>
        <tr class="table-tr">
            <td>
                <a href="null" style="color:#00ff00; text-decoration:none; font-size:16px; font-family:Arial;">Поддержка</a>
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