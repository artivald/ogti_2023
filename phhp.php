<?php
session_start();
if (isset($_POST['GoAutor'])) {
    $autorization = false;
    $users_file = 'users.txt';
    $users = file($users_file);

    foreach ($users as $user) {
        $row = explode("#", $user); 

        if (trim($_POST['login']) == trim($row[4]) && trim($_POST['password']) == trim($row[5])) {
            $autorization = true;
            $_SESSION['idUser'] = trim($row[0]);
            $_SESSION['login_'] = trim($row[4]); 
            $_SESSION['$right'] = trim($row[9]);
            $name = trim($row[2]);
            $lastname = trim($row[1]);
            break;
        }
    }

    if ($autorization) 
        header('Location: rab.php');
	else 
	    $message = 'Неправильный логин или пароль';

}
?>
	
