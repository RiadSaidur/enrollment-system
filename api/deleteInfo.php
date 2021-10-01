
<?php
  include_once '../config/Database.php';
  include_once '../config/Student.php';

  $database = new Database();
  $db = $database->connect();
  $student = new Student($db);

  $res = $student->deleteInfo($_GET['reg_no']);
  echo $res;

  if($res) header("HTTP/1.1 200 OK");
  else header("HTTP/1.1 400 Bad Request");
?>