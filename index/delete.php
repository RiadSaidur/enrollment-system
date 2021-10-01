<?php 
  include_once "../config/Database.php";
  include_once "../config/Student.php";    

  $database = new Database();
  $db = $database->connect();
  $student = new Student($db);
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) $res = $student->deleteInfo($_GET['reg_no']);
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
  }
?>