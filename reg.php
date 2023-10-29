<?php 
 if ($_POST ['go_reg'])
 {
 $filename = 'users.txt';
    $currentData = file_get_contents($filename);
    $lines = explode("\n", $currentData);
    $lastLine = end($lines);
    $lastLineData = explode('#', $lastLine);
    $lastId = intval($lastLineData[0]);
    $newId = $lastId + 1;
    $data = $newId.'#'.$_POST['d1'].'#'.$_POST['d2'].'#'.$_POST['d3'].'#'.$_POST['d4'].'#'.$_POST['d5'].'#'.$_POST['d6'].'#'.$_POST['d7'].'#'.$_POST['d8'].'#'.$_POST['d9']."\n";
    file_put_contents($filename, $data, FILE_APPEND);
}
 ?>
<!doctype html>
<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 

  <title>CodePen - Animated Login Form using Html &amp; CSS Only</title> 

  <link rel="stylesheet" href="./style.css"> 

 </head> 

 <body> <!-- partial:index.partial.html --> 

  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

   <div class="signin"> 

    <div class="content"> 
        <form method="POST">
     <h2>Регистрация</h2> 

     <div class="form"> 

      <div class="inputBox"> 
       <input type="text" required name="d1"> <i>Фамилия</i> 
      </div>
            <div class="inputBox"> 
       <input type="text" required name="d2"> <i>Имя</i> 
      </div>
            <div class="inputBox"> 
       <input type="text" required name="d3"> <i>Отчество</i> 
      </div>

      <div class="inputBox"> 

       <input type="login" required name="d4"> <i>Логин</i> 

      </div>  

      <div class="inputBox"> 

       <input type="password" required name="d5"> <i>Пароль</i> 

      </div> 

      <div class="inputBox"> 

       <input type="iphone" required name="d6"> <i>Телефон (74445550070)</i> 

      </div> 

      <div class="inputBox"> 

       <input type="mail" required name="d7"> <i>Почта</i> 

      </div> 

      <div class="inputBox"> 
       <input type="birthday" required name="d8"> <i>Дата рождения (00.00.0000)</i> 
      </div> 
      <div class="inputBox"> 
       <input type="birthday" required name="d9"> <i>Должность</i> 
      </div> 
      <div class="links"> <a href="index.html">Есть аккаунт?</a> <a href="index.html">Войти</a> 

      </div> 

      <div class="inputBox"> 

       <input type="submit" value="Зарегистрироваться" name="go_reg"> 

      </div> 

     </div> 

    </div> 

   </div> 
</form>
  </section> <!-- partial --> 

 </body>

</html>