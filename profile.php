<?php
  session_start();

  require_once 'models/user.php';

  $userModel = new User();
  if(!empty($_SESSION['user_id'])) {
    $user = $userModel->get_user($_SESSION['user_id']);
  }

?>
<!DOCTYPE html>
<html class="full" lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Кабинет</title>

     <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css/full.css" rel="stylesheet">
    <link href="/assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!--Навигационное меню -->
<?php
  require './helpers/header.php';
?>

<!--Иконки социальных сетей -->
<div id="social_box">
    <div class="col-md-3 col-md-offset-9">
        <ul class="list-inline">
            <li><a href="#" id="tripad"></a></li>
            <li><a href="#" id="facebook"></a></li>
            <li><a href="#" id="instagram"></a></li>
            <li><a href="#" id="vk"></a></li>
        </ul>
    </div>
</div>

<?php
  if (!empty($_SESSION['user_id'])) {
    require './helpers/profile.php';
  } else {
    require './helpers/login_form.php';
  }
?>

    <!--  Текст  -->
    <div class="container">
        <div class="row otstup_3" style="color:black">
          <?php if (!empty($_SESSION['user_id'])) { ?>
            <?php require './helpers/sessions.php' ?>
          <?php } else {?>
            <p> Войдите или зарегистрируйтесь, чтобы продолжить.</p>
          <?php } ?>

        </div>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/scripts.js"></script>
</body>
</html>
