<?php
require_once 'src/init.php';

if(isset($_SESSION['user'])) {
  header('Location: ' . BASE_URL);
}

if(isset($_POST['login'])) {
  if(empty($_POST['user_username']) || empty($_POST['user_password'])) {
    $error = "Wpisz nazwę użytkownika i hasło";
  } else {
    $user = new User($db);

    $login = [
      'user_username' => escape($_POST['user_username']),
      'user_password' => $_POST['user_password']
    ];

    if($user->checkUser($login)) {
      $_SESSION['user'] = escape($login['user_username']);
  
      header("Location: " . BASE_URL);
    } else {
      $error = "Nazwa użytkownika lub hasło jest niepoprawne!";
    }
  }
}

$page_title = "Logowanie";

require VIEW_ROOT . '/login.php';