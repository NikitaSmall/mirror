<?php
  session_start();

  require_once 'models/user.php';
  require_once 'models/date_picker.php';

  $datePicker = new DatePicker();
  $date = date('y-m-d');

  # $user = new User();
  # $nikitasmall = $user->get_user(1);
?>

<!DOCTYPE html>
<html class="full" lang="ru" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Расписание</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Tipped  CSS -->
    <link rel="stylesheet" type="text/css" href="/assets/css/tipped.css"/>

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
<div class="callout_4 tm-white" id="sec6">

    <!--  Заголовок таблицы  -->
    <div class="container">
        <div class="row">
            <div class=" col-md-6 ">
              <div class="tab_header">
                <h3>
                  <?php echo $datePicker->get_formatted_string($date); ?>
                  -
                  <?php echo $datePicker->get_formatted_string($datePicker->increment_mounth($date)); ?>
                </h3>
              </div>
            </div>
        </div>
    </div>

    <div class="table_container otstup_3">
        <table class="table">
          <?php
            for($i = 0; $i < 31; $i++) {
              if ($datePicker->is_holiday($date)) {
                require './helpers/holiday.php';
              } else {
                require './helpers/work_day.php';
              }
              $date = $datePicker->increment_day($date);
            }
          ?>
        </table>
    </div>
<br>
    <a href="#" id="02">Чёрная полоса_2</a><br>
    <a href="#" id="03">Чёрная полоса_3</a><br>
    <a href="#" id="04">Чёрная полоса_4</a>

    <!-----------------------------------------------------------  Чёрная полоса_1  -------------------------------------------------------------->
    <div id="polosa">
        <div class="black_fon transp tm-white">
            <div id="triangle"></div>  <!-- треугольник указатель --->
            <div class="row inside_otstup_4">

                <!-----------------------------------------------------------  Текст  -------------------------------------------------------------->
                <div class="col-md-3">
                    <div class="text_12">
                        <p>* Будьте внимательны при бронировании
                            и изучите все детали!</p>
                    </div>
                    <div class="text_13">
                        <p>* Примите пожалуйста к сведению,
                            что это дневное время!
                    </div>
                </div>
                <!-----------------------------------------------------------  Фото  -------------------------------------------------------------->
                <div class="col-md-2">
                    <div class="p_left">
                        <img src="pictures/avatar.png" alt="" border="0" class="picture_av_1" />
                        <img  src="pictures/contur_black.png" alt="" border="0" class="picture_av_2" />
                    </div>
                </div>


                <!-----------------------------------------------------------  Мэр города N  -------------------------------------------------------------->
                <div class="col-md-3">
                    <div class="text_14">
                        <h3>Мер города "N"</h3>
                    </div>

                    <div class="text_15">
                        <p>от 2-4 игроков</p>
                    </div>
                    <div class="text_16">
                        <p>Бронируя квест вы принимаете договор оферты</p>
                    </div>
                </div>

                <!-----------------------------------------------------------  Начало сеанса, стоимость  -------------------------------------------------------------->
                <div class="col-md-3">
                    <div class="text_14">
                        <h3><span style="color:#b6b9b9">Начало сеанса: </span><span id="date">12 сентября</span> в <span id="time">"21:30</span></h3>
                    </div>

                    <div class="text_15">
                        <p> Стоимость:<span style="color: white"> 4.500 рублей</span></p>
                    </div>
                    <div class="text_16">
                        <a href="#" id="registr" class="remem_2" style="text-decoration: none;">Забронировать&#160&#160&#160&#160&#160&#160&#160</a>
                    </div>
                    <!-- Кнопка выхода -->
                    <a href="#" id="button_exit"></a>
                </div>

                <div class="col-md-1"></div>

            </div>

        </div>
    </div>

    <!-----------------------------------------------------------  Чёрная полоса_2  -------------------------------------------------------------->
    <div id="polosa_2">
        <div class="black_fon transp tm-white">
            <div id="triangle_2"></div>  <!-- треугольник указатель --->
            <div class="row inside_otstup_4">

                <!-----------------------------------------------------------  Текст  -------------------------------------------------------------->
                <div class="col-md-4">
                    <div class="text_12">
                        <p>* Вам необходимо оплатить игру в течение часа,
                            в противном случае бронь будет снята. После оплаты
                            Вы получиье уведомление на электронную почту
                            или по sms.</p>
                        <p>* Вы можете редактировать свою бронь в личном
                            кабинете.</p>
                        <p>* Отмена сеанса возможна не позднее, чем за 48 часов до
                            сеанса. Электронные платежи возврату не подлежат!</p>
                    </div>
                 </div>

                <!-----------------------------------------------------------  Будете перенаправлены   --------------------------------------->
                  <div class="col-md-6">
                    <div class="text_17">
                        <h3>
                                Сейчас вы будете перенаправлены на страницу сайта оплаты.
                                Если этого не произошло нажмите пожалуйста на кнопку
                                «Перейти на сайт оплаты» самостоятельно.
                        </h3>
                        <div class="otstup_4"></div>
                        <a href="#" class="remem_4" style="text-decoration: none;">&#160&#160&#160&#160&#160&#160Перейти на сайт оплаты</a>
                    </div>
                </div>
                <div class="col-md-2">
                    <!-- Кнопка выхода -->
                    <a href="#" id="button_exit_2"></a>
                </div>
            </div>

        </div>
    </div>

</div>

<!-----------------------------------------------------------  Чёрная полоса_3  -------------------------------------------------------------->
<div id="polosa_3">
    <div class="black_fon transp tm-white">
        <div id="triangle_3"></div>  <!-- треугольник указатель --->
        <div class="row inside_otstup_4">

            <!-----------------------------------------------------------  Текст  -------------------------------------------------------------->
            <div class="col-md-3">
                <div class="text_12">
                    <p>* Будьте внимательны при бронировании
                        и изучите все детали!</p>
                </div>
                <div class="text_13">
                    <p>* Примите пожалуйста к сведению,
                        что это дневное время!
                </div>
            </div>
            <!--<div class="otstup">-->

            <!-----------------------------------------------------------  Форма_1  -------------------------------------------------------------->

            <div class="col-md-8">
                <div class="col-md-4">
                    <h2>&#160Войти</h2>

                    <form class="form-horizontal" role="form">

                        <input type="email"  id="inputEmail3" placeholder="Email" >
                        <input type="password"id="inputPassword3" placeholder="Пароль">

                        <div class="black_fon">
                            <div class=" col-sm-8">
                                <a href="#" class="remem_3" style="text-decoration: none; margin-top: 8px;">Забыли пароль?</a>
                            </div>


                            <div class="col-sm-4">
                                <input type="submit" class="submit_1" style="" name="submit_1" value="Войти">
                            </div>
                        </div>
                    </form>
                </div>


                <!-----------------------------------------------------------  Форма_2  -------------------------------------------------------------->
                <!-- Зарегистрироваться -->

                <div class="col-md-8 pad_8">
                    <form class="form-horizontal" role="form">

                        <div class="col-md-6">
                            <h2>&#160Зарегистрироваться</h2>
                            <input type="email"  id="inputname3" placeholder="Имя">
                            <input type="password"  id="inputmail3" placeholder="Email">

                            <div class="otstup_3"></div>
                            <h4 style="color: #326264;">&#160* Обязательно к заполнению</h4>
                        </div>

                        <div class="col-md-6">
                            <h2>&#160</h2>
                            <input type="email" id="inputname4" placeholder="+7">
                            <input type="password" id="inputmail4" placeholder="Пароль">

                            <!--<div class="otstup_3"></div>-->
                            <input type="submit" class="submit_2" style="text-decoration: none; float: right;"value="Зарегистрироваться">
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-md-1">
                <!-- Кнопка выхода -->
                <a href="#" id="button_exit_3"></a>
            </div>
        </div>

    </div>
</div>

<!-----------------------------------------------------------  Чёрная полоса_4  -------------------------------------------------------------->
<div id="polosa_4">
    <div class="black_fon transp tm-white">
        <div id="triangle_4"></div>  <!-- треугольник указатель --->
        <div class="row inside_otstup_4">

            <!-----------------------------------------------------------  Текст  -------------------------------------------------------------->
            <div class="col-md-4">
                <div class="text_12">
                    <p>* Вам необходимо оплатить игру в течение часа,
                        в противном случае бронь будет снята. После оплаты
                        Вы получиье уведомление на электронную почту
                        или по sms.</p>
                    <p>* Вы можете редактировать свою бронь в личном
                        кабинете.</p>
                    <p>* Отмена сеанса возможна не позднее, чем за 48 часов до
                        сеанса. Электронные платежи возврату не подлежат!</p>
                </div>
            </div>

            <!-----------------------------------------------------------  Мэр города  "N" --------------------------------------->
            <div class="col-md-3">
                <div class="text_14">
                    <h3>Мер города "N"</h3>
                </div>
                <div class="text_14" style="margin-top: -8px;">
                    <p><span style="color:#326264">Начало сеанса: </span><span id="date_4">12 сентября</span> в <span id="time_4">"21:30</span>
                    <br><span style="color: #326264"> Стоимость:</span> 4.500 рублей</p>
                </div>
                <br><br><p  style="color:#35b5b8">Бронируя квест вы принимаете договор оферты</p>
            </div>

            <div class="col-md-3">
                <div class="text_14">
                    <h3 style="text-align: right;">Выберите способ оплаты:&#160&#160&#160&#160</h3>
                </div>
                <form class="form-horizontal" role="form">
                    <ul class="myul">
                        <li><a href="#">Частичная оплата банковской картой&#160&#160&#160&#160&#160</a></li>
                        <li><span class="dispfall">(50%, остальное на месте)</span></li>
                        <li ><a href="#">Оплата службой Яндекс.Деньги&#160&#160&#160&#160&#160</a></li>
                        <li  class="active"><a href="#">У меня есть подарочный сертификат&#160&#160&#160&#160&#160</a></li>
                     </ul>
                    <input type="submit" name="submit" value="Продолжить" id="submit_4">
                </form>


            </div>

            <div class="col-md-2">
                <!-- Кнопка выхода -->
                <a href="#" id="button_exit_4"></a>
            </div>
        </div>

    </div>
</div>

</div>




</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/assets/js/bootstrap.js"></script>
<script src="/assets/js/scripts.js"></script>
<script src="/assets/js/moment.js"></script>
<script type="text/javascript" src="/assets/js/tipped.js"></script>
</body>
</html>
