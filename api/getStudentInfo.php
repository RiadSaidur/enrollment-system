<?php

  include_once '../config/Database.php';
  include_once '../config/Student.php';

  $database = new Database();
  $db = $database->connect();
  $std = new Student($db);

  $res = $std->getStudentByReg($_GET['reg_no']);

  echo $res;

?>