<?php
require_once 'src/init.php';

if(isset($_SESSION['user'])) {
  header('Location: ' . BASE_URL);
}

if(isset($_POST['signup'])) {
  if(empty($_POST['user_username']) || empty($_POST['user_email']) || empty($_POST['user_password']) || empty($_POST['confirm_password'])) {
    $error = "Wypełnij wszystkie pola!";
  } else if($db->exists('users', array('user_username' => $_POST['user_username']))) {
    $error = "Nazwa użytkownika jest zajęta.";
  } else if($db->exists('users', array('user_email' => $_POST['user_email']))) {
    $error = "Adres email jest już używany.";
  } else if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
    $error = "Wpisz poprawny adres email.";
  } else if($_POST['user_password'] !== $_POST['confirm_password']) {
    $error = "Hasło się nie zgadza :(";
  } else {
    $user = new User($db);

    $signup = [
      'user_username' => escape($_POST['user_username']),
      'user_email' => escape($_POST['user_email']),
      'user_password' => password_hash($_POST['user_password'], PASSWORD_BCRYPT)
    ];

    if($user->createUser($signup)) {
      $_SESSION['user'] = escape($signup['user_username']);

      header("Location: " . BASE_URL);
    } else {
      $error = "Rejestracja jest niemożliwa.";
    }
  }
}

$page_title = "Rejestracja";

require VIEW_ROOT . '/signup.php';