<?php 

  require_once './config/Database.php';
  require_once './config/Student.php';

  $database = new Database();
  $db = $database->connect();
  $std = new Student($db);

  $students = $std->getAll();

  while($student = mysqli_fetch_array($students)) {
    echo "<li>";
    echo "<a href='/?reg_no=$student[reg_no]'>";
    echo "<span>$student[reg_no]</span><span>$student[std_name]</span><span>$student[department_name]</span>";
    echo"</a>";
    echo "</li>";
  }

?>