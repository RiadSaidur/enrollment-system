<?php
  require_once '../config/Database.php';
  require_once '../models/Student.php';

  $database = new Database();
  $db = $database->connect();
  $std = new Student($db);

  $param = array(
    'field' => $_GET['field'],
    'value' => $_GET['value']
  );

  $res = $std->serachStudent($param);
  
  echo $res;
?>