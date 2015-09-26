<?php
  require_once 'models/helpers.php';

  class DataBase {
    var $connection;

    // connection to hardcoded database
    function __construct() {
      $host = 'localhost';
      $user = 'root';
      $password = 'toor';

      $database = 'mirror_db';

      $this->connection = new mysqli($host, $user, $password, $database);

      if ($this->connection->connect_error) {
          die("Connection failed: " . $this->connection->connect_error);
      }
    }

    protected function execute_query($query) {
      return $this->connection->query($query);
    }

    // for rows of results from db to array
    protected function fetch_array($result) {
      $array = [];
      while($row = $result->fetch_assoc()) {
        $array[] = $row;
      }

      return $array;
    }
  }
