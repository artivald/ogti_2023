<?php
session_start();
if (isset($_POST['GoAutor'])) {
    $autorization = false;
    $users_file = 'users.txt';
    $users = file($users_file);

    foreach ($users as $user) {
        $row = explode("#", $user); // Здесь замените '#' на желаемый разделитель

        if (trim($_POST['login']) == trim($row[4]) && trim($_POST['password']) == trim($row[5])) {
            $autorization = true;
            $_SESSION['idUser'] = trim($row[0]); 
            break;
        }
    }

    if ($autorization) 
        header('Location: rab.php');
	else 
	    $message = 'Неправильный логин или пароль';

}
?>
	
