<?php

  include "./config/Database.php";
  include_once "./config/Student.php";    
  
  // $database = new Database();
  // $db = $database->connect();
  // $student = new Student($db);

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $database = new Database();
    $db = $database->connect();
    $student = new Student($db);

    $data = array(
      "reg_no" => $_POST['reg_no'],
      "department_name" => $_POST['department_name'],
      "std_name" => $_POST['std_name'],
      "gender" => $_POST['gender'],
      "hsc_roll" => $_POST['hsc_roll'],
      "college" => $_POST['college'],
      "hsc_gpa" => $_POST['hsc_gpa'],
      "hsc_year" => $_POST['hsc_year'],
      "hsc_group" => $_POST['hsc_group'],
      "f_name" => $_POST['f_name'],
      "m_name" => $_POST['m_name']
    );

    if(isset($_GET["reg_no"])) $student->updateInfo($data);
    else $student->addNew($data);

  }

?>