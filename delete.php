<?php

$id = $_POST['id'];

$users = file('users.txt');
$new_users = [];

foreach ($users as $line) {
  $user = explode('#', $line);
  if ($user[0] != $id) {
    $new_users[] = $line; 
  }
}

file_put_contents('users.txt', implode('', $new_users));

header('Location: ModerUser.php');

?>