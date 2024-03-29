<?php
  include_once '../config/Database.php';
  include_once '../config/Student.php';

  $database = new Database();
  $db = $database->connect();
  $student = new Student($db);

  $data = json_decode(file_get_contents('php://input'), true);

  $res = $student->updateInfo($data);

  if($res) header("HTTP/1.1 200 OK");
  else header("HTTP/1.1 400 Bad Request");
?>