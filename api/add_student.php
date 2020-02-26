<?php
  require_once '../config/Database.php';
  require_once '../models/Student.php';

  $database = new Database();
  $db = $database->connect();

  $student = new Student($db);

  // $student->addNew($_POST);
  echo $_POST['body'];
?>