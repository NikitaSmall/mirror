<?php
  session_start();

  require_once 'models/user.php';

  $userModel = new User();

  if(!empty($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $userModel->check_user($email, $password);

    if(isset($user)) {
      $_SESSION['user_id'] = $user['id'];
      redirect('/profile.php');
    } else {
      $_SESSION['message'] = 'Этого пользователя не существует!';
      redirect('/profile.php');
    }
  }

  redirect('/404.html');
