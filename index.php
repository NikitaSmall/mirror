<?php
  session_start();

  require_once 'models/user.php';

  # $user = new User();
  # $nikitasmall = $user->get_user(1);
?>

<html>
  <head>
    <title>Зазеркалье</title>

  </head>
  <body>
    <pre>
      <?php var_dump($_SESSION) ?>
    </pre>

    <form method="post" action="/login.php" >
      <input name="email" type="email">
      <input name="password" type="password">

      <input name="login" type="submit" value="Залогиниться!">
    </form>

    <form method="post" action="/register.php" >
      <input name="real_name" type="text">
      <input name="phone" type="phone">
      <input name="email" type="email">
      <input name="password" type="password">

      <input name="register" type="submit" value="Зарегистрируйся!">
    </form>
  </body>
</html>
