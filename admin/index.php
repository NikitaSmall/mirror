<?php
  require_once '../models/user.php';

  $user = new User();
  $nikitasmall = $user->get_user(1);
?>
<?php echo $nikitasmall[0]['username']; ?>
this is protected!
