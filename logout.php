<?php
  session_start();

  require_once 'models/user.php';
  unset($_SESSION['user_id']);

  redirect('/profile.php');
