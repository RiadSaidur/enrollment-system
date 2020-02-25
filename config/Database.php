<?php
    // $host = 'localhost';
    // $user = 'root';
    // $pass = '';
    // $dbname = 'enroll';

    // $connection = new mysqli($host, $user, $pass, $dbname);

    // if($connection->connect_errno) {
    //     echo 'BOOM' . $connection->connect_errno;
    //     exit();
    // }

    class Database {
      private $host = 'localhost';
      private $user = 'root';
      private $pass = '';
      private $dbname = 'enrollment';
      private $connection;

      public function connect() {
        $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        return $this->connection;
      }

      public function __destruct() {
        $this->connection->close();
      }
    }
?>