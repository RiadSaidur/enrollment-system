<?php
  require_once '../config/Database.php';
  require_once '../models/Student.php';

  $database = new Database();
  $db = $database->connect();

  $student = new Student($db);
  $data = json_decode(file_get_contents('php://input'), true);

  $res = $student->addNew($data);

  header("Content-type:application/json");
  if($res) {
    header("HTTP/1.1 200 OK");
    // $res = array(
    //   "okay" => "okay"
    // );
    // $res = json_encode($res);
  } else {
    header("HTTP/1.1 400 Bad Request");
    // $res = array(
    //   "okay" => "not okay"
    // );
    // $res = json_encode($res);
  }
?>