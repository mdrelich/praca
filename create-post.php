<?php
require_once 'src/init.php';

if(!isset($_SESSION['user'])) {
  header('Location: ' . BASE_URL);
}

$user = new User($db);
$category = new Category($db);


$user_data = $user->getUser($_SESSION['user']);
$categories = $category->getCategories();

if(isset($_POST['create_post'])) {
  if(!empty($_POST['post_title'])) {
    $post = new Post($db);

    $new_post = [
      'post_title' => escape($_POST['post_title']),
      'post_text' => escape($_POST['post_text']),
      'post_category' => escape($_POST['post_category']),
      'post_by' => $user_data->user_id
    ];
      $level = ['user_level'=>111];
$user->updateUserLevel($level, $user_data->user_id);

    if($post->createPost($new_post)) {
      header('Location: ' . BASE_URL);
    } else {
      $error = "Nie mozna stworzyć wątku";
    }
  } else {
    $error = "Wpisz nazwe wątku";
  }
}

$page_title = "Napisz wątek";

require VIEW_ROOT . '/create-post.php';