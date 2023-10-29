<?php 
session_start();
include_once("phhp.php");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ПрофТестиум</title>
    <link href="styleMain.css" rel="stylesheet">
</head>
<body>
<style type="text/css">
    p{
        color:#FFFFFF;
        font-size: 12px;
    }
</style>
  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

    <div class="signin">
    <div class="content">
    <div class="headerRab"><a href="index.php"><img src="logo.png" width="5%" alt="Логотип"></a></div>
    <div class="profileInfo">
    <?php 
        if (isset($_SESSION['idUser'])) 
        {
    $idUser = $_SESSION['idUser'];
    $users_file = 'users.txt';
    $users = file($users_file);
        if ( $_SESSION['$right'] == "Системный администратор" || $_SESSION['$right'] == "hr-менеджер")
        {
            echo "<table><tr><td>";
            echo "<p class=\"profile\">Пользователи</p>
            <table border=3px color=\"#ffffff\">
            <tr><td><p>Айди</p></td><td><p>Фамилия</p></td><td><p>Имя</p></td><td><p>Отчество</p></td><td><p>Телефон</p></td><td><p>Почта</p></td><td><p>Дата рождения</p></td><td><p>Специальность</p></td><td><p>Отдел</p></td></tr>";
    foreach ($users as $user) 
     {
        $row = explode("#", $user);
            echo "<tr><td><p>$row[0]</p></td><td><p>$row[1]</p></td><td><p>$row[2]</p></td><td><p>$row[3]</p></td><td><p>$row[6]</p></td><td><p>$row[7]</p></td><td><p>$row[8]</p></td><td><p>$row[9]</p></td><td><p>$row[10]</p></td></tr>";   
            echo "<td><form action='delete.php' method='post'>";
echo "<input type='hidden' name='id' value='$row[0]'>";
echo "<input type='submit' value='Удалить'>";
echo "</form></td>";    
        }  
        echo "</table></td>";


$departments = [];

foreach ($users as $user) {

  $row = explode("#", $user);

  $department = trim($row[10]); 

  if (!isset($departments[$department])) {
    $departments[$department] = [];
  }

  $departments[$department][] = [
    'fio' => $row[1] . ' ' . $row[2] . ' ' . $row[3],
    'position' => $row[9]
  ];

}
echo "<td>";
foreach ($departments as $department => $employees) {

  $dept_num = 1; 

  echo "<h2>$department</h2>";

  echo "<table border='3px'>";
  echo "<tr><td>No</td><td><p>ФИО</p></td><td><p>Должность</p></td></tr>";

  foreach ($employees as $e) {

    echo "<tr>";
    echo "<td><p>$dept_num</p></td>";
    echo "<td><p>{$e['fio']}</p></td>";
    echo "<td><p>{$e['position']}</p></td>";
    echo "</tr>";

    $dept_num++;

  }

  echo "</table>";

}echo "</td></tr>";

$last_key = array_keys($departments);
$last_key = end($last_key);

echo "<h2>$last_key</h2>";
    }
}
     ?>
    </div>
    </div>
</div>
</body>
</html>