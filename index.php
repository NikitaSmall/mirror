<?php
  require_once 'models/user.php';

  $user = new User();
  $nikitasmall = $user->get_user(1);
?>

<html>
  <head>
    <title>Зазеркалье</title>

  </head>
  <body>
    <pre>
      <?php var_dump($nikitasmall) ?>
    </pre>
  </body>
</html>
