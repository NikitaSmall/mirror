<?php
  require_once 'models/user.php';

  $user = new User();
  $nikitasmall = $user->get_user(1);
?>

<pre>
  <?php var_dump($nikitasmall) ?>
</pre>
