<?php
  session_start();

  require_once 'models/user.php';

  # $user = new User();
  # $nikitasmall = $user->get_user(1);
?>
<!DOCTYPE html>
<html class="full" lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Зазеркалье</title>

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
  require './helpers/header.php'
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
</div></div>


<!-- Первая страница -->
<div class="callout_1" id="sec1">
    <div class="container">
        <div class="row">

        </div>
        </div>
</div>

<!-- Вторая страница -->
<div class="callout_2" id="sec2">
    <div class="container">
        <div class="row text1">
           <div id="text1">
            <div class="col-md-1"></div>
            <div class="col-md-10" data-wow-delay="0.3s">
                <h1 class="text-upper tm-white">Квесты в реальности</h1>
                <p class="tm-white"> - это увлекательное приключение для 2-4х человек, требующее применение логиги, смекалки для решения
                    различных задач и головоломок.<br>Посетите мир Зазеркалья, почувствуйте себя в роли героя загадочной истории, раскройте тайны уникальных сюжетов
                    и приведите свою команду к успеху.
                    </p>

            </div>
            <div class="col-md-1"></div>
    </div>
</div></div></div>

<!-- Третья  страница -->
<div class="callout_3 " id="sec3">
    <div class="container">
        <div class="row text-center otstup_6">
            <!-- Здесь ставляем два пустых блока для кликабельности картинок  -->
            <div id="picture_click_1"  onClick="" >&nbsp;</div>    <!-- Левая картинка -->
            <!--<div class="col-md-2">&nbsp;</div>                                                                          &lt;!&ndash; Пустой промежуток &ndash;&gt;-->
            <div id="picture_click_2"  onClick="" >&nbsp;</div>  <!-- Правая картинка -->
        </div>
    </div>
</div>

<!--Нижняя стрелка -->
<div id="arrow_poz">
        <a href="#" id="arrow" style=" margin: 0 auto;"></a>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/scripts.js"></script>
<script src="/assets/js/moment.js"></script>
</body>
</html>
