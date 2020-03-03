<?php
  require_once '../config/Database.php';
  require_once '../models/Student.php';

  $database = new Database();
  $db = $database->connect();
  $std = new Student($db);

  $res = $std->getAll();
  
  echo $res;
?>