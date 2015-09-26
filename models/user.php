<?php
  require_once 'db.php';

  class User extends DataBase {
    function __construct() {
      parent::__construct();
    }

    public function get_user($id) {
      $result = $this->execute_query('SELECT * FROM users WHERE id = ' . $id);
      return $this->fetch_array($result)[0];
    }

    public function add_user($real_name, $email, $phone, $password) {
      $password_save = md5($password);
      $query = 'INSERT INTO users (real_name, email, phone, password)' .
      'VALUES ("' . $real_name .'", "' . $email . '", "' . $phone . '", "' . $password_save . '")';

      $this->execute_query($query);
    }

    public function check_user($email, $password) {
      $password_save = md5($password);
      $result = $this->execute_query('SELECT * FROM users WHERE password = "' . $password_save . '" AND email = "' . $email . '"');

      return $this->fetch_array($result)[0];
    }

    public function check_email($email) {
      $result = $this->execute_query('SELECT * FROM users WHERE email = "' . $email . '"');

      if (!empty($this->fetch_array($result)[0])) {
        return false;
      } else {
        return true;
      }
    }
  }
