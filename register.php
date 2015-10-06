<?php
  session_start();

  require_once 'models/user.php';

  $userModel = new User();

  if(!empty($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $real_name = $_POST['real_name'];

    $free_mail = $userModel->check_email($email);

    if($free_mail) {
      $userModel->add_user($real_name, $email, $phone, $password);
      $user = $userModel->check_user($email, $password);

      $_SESSION['user_id'] = $user['id'];
      redirect('/profile.php');
    } else {
      $_SESSION['message'] = 'Этот email уже используется!';
      redirect('/profile.php');
    }
  }

  redirect('/404.html');
