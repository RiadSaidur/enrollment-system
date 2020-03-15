
<?php
  require_once '../config/Database.php';
  require_once '../models/Student.php';

  $database = new Database();
  $db = $database->connect();

  $student = new Student($db);

  $res = $student->deleteInfo($_GET['reg_no']);

  if($res) header("HTTP/1.1 200 OK");
  else header("HTTP/1.1 400 Bad Request");
?>