<?php
  require_once 'db.php';

  class User extends DataBase {
    function __construct() {
      parent::__construct();
    }

    public function get_user($id) {
      $result = $this->execute_query('SELECT * FROM users WHERE id = ' . $id);
      return $this->fetch_array($result);
    }
  }
